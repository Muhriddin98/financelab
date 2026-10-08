@extends('adminlte::page')

@section('title', 'Maqolani tahrirlash')

@section('content_header')
    <h1>Maqolani tahrirlash</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card"><div class="card-body">
        <form action="{{ route('admin.articles.update', $article) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @include('admin.articles._form')
        </form>
    </div></div>
@stop
