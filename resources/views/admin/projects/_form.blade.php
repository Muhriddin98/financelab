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
            <label>Qamrov</label>
            <textarea id="scope-editor" name="scope" rows="12" class="form-control">{{ old('scope', $project->scope ?? '') }}</textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Til prefiksi</label>
            <select name="locale" class="form-control">
                @foreach(['en' => 'EN', 'ru' => 'RU', 'uz' => 'UZ'] as $val => $label)
                <option value="{{ $val }}" {{ old('locale', $project->locale ?? 'en') === $val ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>
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
        <div class="form-check">
            <input type="checkbox" name="is_published" value="1" class="form-check-input" id="pub" {{ old('is_published', $project->is_published ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="pub">Nashr qilish</label>
        </div>
    </div>
</div>
<button class="btn btn-primary">Saqlash</button>
<a href="{{ route('admin.projects.index') }}" class="btn btn-default">Bekor qilish</a>

<script src="/vendor/tinymce/tinymce.min.js"></script>
<script>
(function () {
    var csrf = document.querySelector('#scope-editor').closest('form').querySelector('input[name="_token"]').value;
    tinymce.init({
        selector: '#scope-editor',
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
