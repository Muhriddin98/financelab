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
            <label>Matn</label>
            <textarea id="body-editor" name="body" rows="12" class="form-control">{{ old('body', $article->body ?? '') }}</textarea>
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
        <div class="form-check">
            <input type="checkbox" name="is_published" value="1" class="form-check-input" id="pub" {{ old('is_published', $article->is_published ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="pub">Nashr qilish</label>
        </div>
    </div>
</div>
<button class="btn btn-primary">Saqlash</button>
<a href="{{ route('admin.articles.index') }}" class="btn btn-default">Bekor qilish</a>

<script src="/vendor/tinymce/tinymce.min.js"></script>
<script>
(function () {
    var csrf = document.querySelector('#body-editor').closest('form').querySelector('input[name="_token"]').value;
    tinymce.init({
        selector: '#body-editor',
        license_key: 'gpl',
        height: 480,
        menubar: 'edit view insert format tools',
        plugins: 'link image lists table code fullscreen help',
        toolbar: 'styles | bold italic underline strikethrough forecolor backcolor | alignleft aligncenter alignright | bullist numlist | link image table | removeformat code fullscreen',
        relative_urls: false,
        images_upload_handler: function (blobInfo) {
            var fd = new FormData();
            fd.append('file', blobInfo.blob(), blobInfo.filename());
            return fetch('{{ route('admin.upload-image') }}', {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json' },
                body: fd
            }).then(function (r) {
                if (!r.ok) throw new Error('Upload failed');
                return r.json();
            }).then(function (j) { return j.location; });
        },
        content_style: 'body{font-family:Arial,Helvetica,sans-serif;font-size:16px;line-height:1.65}img{max-width:100%;height:auto}h2{font-size:26px}h3{font-size:21px}blockquote{border-left:3px solid #16bafb;margin:1em 0;padding:.5em 0 .5em 1em;color:#33475f}'
    });
})();
</script>
