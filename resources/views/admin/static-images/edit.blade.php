@extends('adminlte::page')

@section('title', $image['label'])

@section('content_header')
    <h1>{{ $image['label'] }}</h1>
@stop

@section('content')
    <div class="card">
        <form action="{{ route('admin.static-images.update', $image['key']) }}" method="post" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="card-body">
                <p><small class="text-muted">/{{ $image['path'] }} · {{ $image['hint'] }}</small></p>
                <p><img src="{{ $image['url'] }}" alt="" style="max-width:400px;max-height:250px;object-fit:contain;border:1px solid #dee2e6;border-radius:4px"></p>
                <div class="form-group">
                    <label>Yangi rasm (jpg/png/webp, max 5MB)</label>
                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" required accept=".jpg,.jpeg,.png,.webp">
                    @error('image')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                    <small class="form-text text-muted">1600px dan katta bo‘lsa kichrayadi, WebP (q82) ga o‘tadi. Eski fayl o‘rniga yoziladi.</small>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm">Saqlash</button>
                <a href="{{ route('admin.static-images.index') }}" class="btn btn-secondary btn-sm">Orqaga</a>
            </div>
        </form>
    </div>
@stop
