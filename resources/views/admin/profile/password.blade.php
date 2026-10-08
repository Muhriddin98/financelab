@extends('adminlte::page')

@section('title', 'Parolni almashtirish')

@section('content_header')
    <h1>Parolni almashtirish</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card"><div class="card-body">
        <form action="{{ route('admin.password.update') }}" method="post">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Joriy parol</label>
                <input type="password" name="current_password" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Yangi parol (kamida 8 belgi)</label>
                <input type="password" name="password" class="form-control" required minlength="8">
            </div>
            <div class="form-group">
                <label>Yangi parolni tasdiqlash</label>
                <input type="password" name="password_confirmation" class="form-control" required minlength="8">
            </div>
            <button class="btn btn-primary">Almashtirish</button>
        </form>
    </div></div>
@stop
