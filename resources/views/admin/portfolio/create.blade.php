@extends('adminlte::page')

@section('title', 'Portfolio qo‘shish')

@section('content_header')
    <h1>Portfolio yozuvini qo‘shish</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card"><div class="card-body">
        <form action="{{ route('admin.portfolio.store') }}" method="post">
            @include('admin.portfolio._form')
        </form>
    </div></div>
@stop
