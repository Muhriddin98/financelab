@extends('adminlte::page')

@section('title', 'Loyihani tahrirlash')

@section('content_header')
    <h1>Loyihani tahrirlash</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card"><div class="card-body">
        <form action="{{ route('admin.projects.update', $project) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @include('admin.projects._form')
        </form>
    </div></div>
@stop
