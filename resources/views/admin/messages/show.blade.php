@extends('adminlte::page')

@section('title', 'Murojaat')

@section('content_header')
    <h1>Murojaat #{{ $message->id }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-3">Sana</dt><dd class="col-sm-9">{{ $message->created_at?->format('d.m.Y H:i') ?? '—' }}</dd>
                <dt class="col-sm-3">Ism</dt><dd class="col-sm-9">{{ $message->name }}</dd>
                <dt class="col-sm-3">Email</dt><dd class="col-sm-9">{{ $message->email }}</dd>
                <dt class="col-sm-3">Tashkilot</dt><dd class="col-sm-9">{{ $message->organization ?? '—' }}</dd>
                <dt class="col-sm-3">Yo‘nalish</dt><dd class="col-sm-9">{{ $message->interest }}</dd>
                <dt class="col-sm-3">Til</dt><dd class="col-sm-9">{{ strtoupper($message->locale) }}</dd>
                <dt class="col-sm-3">IP</dt><dd class="col-sm-9">{{ $message->ip ?? '—' }}</dd>
                <dt class="col-sm-3">Xabar</dt><dd class="col-sm-9">{{ $message->message }}</dd>
            </dl>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.messages.index') }}" class="btn btn-secondary btn-sm">Orqaga</a>
        </div>
    </div>
@stop
