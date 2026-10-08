@extends('adminlte::page')

@section('title', 'Maqolalar')

@section('content_header')
    <h1>Maqolalar</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Qo‘shish</a>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr><th>#</th><th>Sarlavha</th><th>Tur</th><th>Kategoriya</th><th>Sana</th><th>Holat</th><th></th></tr>
                </thead>
                <tbody>
                    @forelse($articles as $a)
                    <tr>
                        <td>{{ $a->sort_order }}</td>
                        <td>{{ $a->title }}</td>
                        <td>
                            @if($a->isMedia())<span class="badge badge-info">Media</span>
                            @else<span class="badge badge-primary">Insight</span>@endif
                        </td>
                        <td>{{ $a->category }}</td>
                        <td>{{ $a->date ?? '—' }}</td>
                        <td>
                            @if($a->is_published)<span class="badge badge-success">Nashrda</span>
                            @else<span class="badge badge-secondary">Qoralama</span>@endif
                        </td>
                        <td class="text-right">
                            <a href="{{ $a->href }}" target="_blank" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.articles.edit', $a) }}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.articles.destroy', $a) }}" method="post" class="d-inline" onsubmit="return confirm('O‘chirilsinmi?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
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
