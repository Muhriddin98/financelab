@csrf
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label>Sarlavha</label>
            <input type="text" name="title" value="{{ old('title', $project->title ?? '') }}" class="form-control" required maxlength="255">
        </div>
        <div class="form-group">
            <label>Tavsif</label>
            <textarea name="description" rows="3" class="form-control" required>{{ old('description', $project->description ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label>Qamrov (har bir qator — bitta band)</label>
            <textarea name="scope" rows="4" class="form-control">{{ old('scope', isset($project) ? implode("\n", $project->scope ?? []) : '') }}</textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $project->slug ?? '') }}" class="form-control" required maxlength="100">
        </div>
        <div class="form-group">
            <label>Soha</label>
            <input type="text" name="industry" value="{{ old('industry', $project->industry ?? '') }}" class="form-control" required maxlength="100">
        </div>
        <div class="form-group">
            <label>Rasm</label>
            @if(!empty($project->image_url))
                <div class="mb-2"><img src="{{ $project->image_url }}" alt="" style="max-width:100%;border-radius:4px;"></div>
            @endif
            <input type="file" name="image" class="form-control-file" accept="image/*">
        </div>
        <div class="form-group">
            <label>Tartib</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $project->sort_order ?? 0) }}" class="form-control" min="0">
        </div>
        <div class="form-check">
            <input type="checkbox" name="is_published" value="1" class="form-check-input" id="pub" {{ old('is_published', $project->is_published ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="pub">Nashr qilish</label>
        </div>
    </div>
</div>
<button class="btn btn-primary">Saqlash</button>
<a href="{{ route('admin.projects.index') }}" class="btn btn-default">Bekor qilish</a>
