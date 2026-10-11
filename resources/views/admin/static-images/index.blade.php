@extends('adminlte::page')

@section('title', 'Statik rasmlar')

@section('content_header')
    <h1>Statik rasmlar</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr><th></th><th>Nom</th><th>Yo‘l</th><th>O‘lcham</th><th>Hajm</th><th>Izoh</th><th></th></tr>
                </thead>
                <tbody>
                    @forelse($images as $img)
                    <tr>
                        <td><img src="{{ $img['url'] }}" alt="" style="height:40px;max-width:80px;object-fit:cover;border-radius:4px"></td>
                        <td>{{ $img['label'] }}</td>
                        <td><small class="text-muted">/{{ $img['path'] }}</small></td>
                        <td>{{ $img['dimensions'] }}</td>
                        <td>{{ $img['size'] }}</td>
                        <td><small class="text-muted">{{ $img['hint'] }}</small></td>
                        <td class="text-right">
                            <a href="{{ route('admin.static-images.edit', $img['key']) }}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="7" class="text-center">Hozircha bo‘sh.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
