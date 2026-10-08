@csrf
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label>Sarlavha</label>
            <input type="text" name="title" value="{{ old('title', $article->title ?? '') }}" class="form-control" required maxlength="255">
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea name="intro" rows="3" class="form-control" required>{{ old('intro', $article->intro ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label>Matn (har bir xatboshi — yangi qatordan)</label>
            <textarea name="body" rows="8" class="form-control">{{ old('body', isset($article) ? implode("\n\n", $article->body ?? []) : '') }}</textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Tur</label>
            <select name="type" class="form-control">
                <option value="insight" {{ old('type', $article->type ?? 'insight') === 'insight' ? 'selected' : '' }}>Insight (/insights/)</option>
                <option value="media" {{ old('type', $article->type ?? '') === 'media' ? 'selected' : '' }}>Media (/media/)</option>
            </select>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $article->slug ?? '') }}" class="form-control" required maxlength="100">
        </div>
        <div class="form-group">
            <label>Kategoriya</label>
            <input type="text" name="category" value="{{ old('category', $article->category ?? '') }}" class="form-control" required maxlength="100">
        </div>
        <div class="form-group">
            <label>Sana</label>
            <input type="date" name="published_at" value="{{ old('published_at', isset($article) && $article->published_at ? $article->published_at->format('Y-m-d') : '') }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Rasm</label>
            @if(!empty($article->image_url))
                <div class="mb-2"><img src="{{ $article->image_url }}" alt="" style="max-width:100%;border-radius:4px;"></div>
            @endif
            <input type="file" name="image" class="form-control-file" accept="image/*">
        </div>
        <div class="form-group">
            <label>Tartib</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $article->sort_order ?? 0) }}" class="form-control" min="0">
        </div>
        <div class="form-check">
            <input type="checkbox" name="is_published" value="1" class="form-check-input" id="pub" {{ old('is_published', $article->is_published ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="pub">Nashr qilish</label>
        </div>
    </div>
</div>
<button class="btn btn-primary">Saqlash</button>
<a href="{{ route('admin.articles.index') }}" class="btn btn-default">Bekor qilish</a>
