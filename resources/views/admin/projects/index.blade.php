@extends('adminlte::page')

@section('title', 'Loyihalar')

@section('content_header')
    <h1>Loyihalar</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Qo‘shish</a>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr><th>#</th><th>Sarlavha</th><th>Soha</th><th>Slug</th><th>Holat</th><th></th></tr>
                </thead>
                <tbody>
                    @forelse($projects as $p)
                    <tr>
                        <td>{{ $p->sort_order }}</td>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->industry }}</td>
                        <td><code>{{ $p->slug }}</code></td>
                        <td>
                            @if($p->is_published)<span class="badge badge-success">Nashrda</span>
                            @else<span class="badge badge-secondary">Qoralama</span>@endif
                        </td>
                        <td class="text-right">
                            <a href="/projects/{{ $p->slug }}/" target="_blank" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.projects.edit', $p) }}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.projects.destroy', $p) }}" method="post" class="d-inline" onsubmit="return confirm('O‘chirilsinmi?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center">Hozircha bo‘sh.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
