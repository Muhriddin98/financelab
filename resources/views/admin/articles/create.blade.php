@extends('adminlte::page')

@section('title', 'Maqola qo‘shish')

@section('content_header')
    <h1>Maqola qo‘shish</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card"><div class="card-body">
        <form action="{{ route('admin.articles.store') }}" method="post" enctype="multipart/form-data">
            @include('admin.articles._form')
        </form>
    </div></div>
@stop
