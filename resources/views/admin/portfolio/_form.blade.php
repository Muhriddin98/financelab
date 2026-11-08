@csrf
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label>Loyiha nomi</label>
            <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control @error('title') is-invalid @enderror" required maxlength="255">
            @error('title')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label>Tashabbuskor (Initiator)</label>
            <input type="text" name="initiator" value="{{ old('initiator', $item->initiator ?? '') }}" class="form-control" maxlength="255">
        </div>
        <div class="form-group">
            <label>Capex (USD)</label>
            <input type="text" name="capex" value="{{ old('capex', $item->capex ?? '') }}" class="form-control" maxlength="100" placeholder="$1.2 bn">
        </div>
        <div class="form-group">
            <label>Ishlar tarkibi (Scope)</label>
            <textarea name="scope" rows="4" class="form-control">{{ old('scope', $item->scope ?? '') }}</textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Soha</label>
            <select name="industry" class="form-control">
                @foreach(\App\Http\Controllers\Admin\PortfolioController::industries() as $key => $label)
                <option value="{{ $key }}" {{ old('industry', $item->industry ?? '') === $key ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Til prefiksi</label>
            <select name="locale" class="form-control">
                @foreach(['en' => 'EN', 'ru' => 'RU', 'uz' => 'UZ'] as $key => $label)
                <option value="{{ $key }}" {{ old('locale', $item->locale ?? 'en') === $key ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" name="is_published" value="1" class="form-check-input" id="pub" {{ old('is_published', $item->is_published ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="pub">Nashr qilish</label>
        </div>
    </div>
</div>
<button class="btn btn-primary">Saqlash</button>
<a href="{{ route('admin.portfolio.index') }}" class="btn btn-default">Bekor qilish</a>
