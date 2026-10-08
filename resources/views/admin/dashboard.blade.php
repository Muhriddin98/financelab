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
    <div class="card">
        <div class="card-body">
            <p class="mb-0">Kontent hozircha <code>config/site.php</code> dan o'qiladi. Keyingi qadam: maqola/loyiha CRUD.</p>
        </div>
    </div>
@stop
