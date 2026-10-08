@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <h1>Profil</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card"><div class="card-body">
        <form action="{{ route('admin.profile.update') }}" method="post">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Ism</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required maxlength="255">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required maxlength="255">
            </div>
            <div class="form-group">
                <label>Rol</label>
                <input type="text" value="{{ $user->role }}" class="form-control" disabled>
            </div>
            <button class="btn btn-primary">Saqlash</button>
        </form>
    </div></div>
@stop
