@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner"><h3>{{ $stats['sections'] }}</h3><p>Sahifa bo'limlari</p></div>
                <div class="icon"><i class="fas fa-file-alt"></i></div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner"><h3>{{ $stats['projects'] }}</h3><p>Loyihalar</p></div>
                <div class="icon"><i class="fas fa-briefcase"></i></div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner"><h3>{{ $stats['articles'] }}</h3><p>Maqolalar</p></div>
                <div class="icon"><i class="fas fa-newspaper"></i></div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner"><h3>{{ $stats['users'] }}</h3><p>Foydalanuvchilar</p></div>
                <div class="icon"><i class="fas fa-users"></i></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">So‘nggi maqolalar</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Qo‘shish</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <tbody>
                            @forelse($recentArticles as $a)
                            <tr>
                                <td>
                                    {{ $a->title }}
                                    <br><small class="text-muted">{{ $a->isMedia() ? 'Media' : 'Insight' }} · {{ $a->date ?? '—' }}</small>
                                </td>
                                <td class="text-right" style="white-space:nowrap">
                                    @if($a->is_published)<span class="badge badge-success">Nashrda</span>
                                    @else<span class="badge badge-secondary">Qoralama</span>@endif
                                    <a href="{{ route('admin.articles.edit', $a) }}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr><td class="text-center">Hozircha bo‘sh.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('admin.articles.index') }}">Barchasi <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">So‘nggi loyihalar</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Qo‘shish</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <tbody>
                            @forelse($recentProjects as $p)
                            <tr>
                                <td>
                                    {{ $p->title }}
                                    <br><small class="text-muted">{{ $p->industry }}</small>
                                </td>
                                <td class="text-right" style="white-space:nowrap">
                                    @if($p->is_published)<span class="badge badge-success">Nashrda</span>
                                    @else<span class="badge badge-secondary">Qoralama</span>@endif
                                    <a href="{{ route('admin.projects.edit', $p) }}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr><td class="text-center">Hozircha bo‘sh.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('admin.projects.index') }}">Barchasi <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@stop
