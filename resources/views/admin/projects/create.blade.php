@extends('adminlte::page')

@section('title', 'Loyiha qo‘shish')

@section('content_header')
    <h1>Loyiha qo‘shish</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card"><div class="card-body">
        <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
            @include('admin.projects._form')
        </form>
    </div></div>
@stop
