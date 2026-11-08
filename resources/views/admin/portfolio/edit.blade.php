@extends('adminlte::page')

@section('title', 'Portfolio tahrirlash')

@section('content_header')
    <h1>Portfolio yozuvini tahrirlash</h1>
@stop

@section('content')
    @include('admin.partials.alerts')
    <div class="card"><div class="card-body">
        <form action="{{ route('admin.portfolio.update', $item) }}" method="post">
            @method('PUT')
            @include('admin.portfolio._form')
        </form>
    </div></div>
@stop
