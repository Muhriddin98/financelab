@extends('adminlte::page')

@section('title', 'Portfolio')

@section('content_header')
    <h1>Portfolio</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Qo‘shish</a>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr><th>Soha</th><th>Loyiha</th><th>Tashabbuskor</th><th>Capex</th><th>Til</th><th>Holat</th><th></th></tr>
                </thead>
                <tbody>
                    @forelse($items as $i)
                    <tr>
                        <td>{{ \App\Http\Controllers\Admin\PortfolioController::industries()[$i->industry] ?? $i->industry }}</td>
                        <td>{{ $i->title }}</td>
                        <td>{{ $i->initiator ?? '—' }}</td>
                        <td>{{ $i->capex ?? '—' }}</td>
                        <td><span class="badge badge-secondary">{{ strtoupper($i->locale) }}</span></td>
                        <td>
                            @if($i->is_published)<span class="badge badge-success">Nashrda</span>
                            @else<span class="badge badge-secondary">Qoralama</span>@endif
                        </td>
                        <td class="text-right">
                            <a href="{{ route('admin.portfolio.edit', $i) }}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.portfolio.destroy', $i) }}" method="post" class="d-inline" onsubmit="return confirm('O‘chirilsinmi?')">
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
