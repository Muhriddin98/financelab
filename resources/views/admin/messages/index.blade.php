@extends('adminlte::page')

@section('title', 'Murojaatlar')

@section('content_header')
    <h1>Murojaatlar</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr><th>Sana</th><th>Ism</th><th>Email</th><th>Yo‘nalish</th><th>Til</th><th></th></tr>
                </thead>
                <tbody>
                    @forelse($messages as $m)
                    <tr>
                        <td>{{ $m->created_at?->format('d.m.Y H:i') ?? '—' }}</td>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->email }}</td>
                        <td>{{ $m->interest }}</td>
                        <td><span class="badge badge-secondary">{{ strtoupper($m->locale) }}</span></td>
                        <td class="text-right">
                            <a href="{{ route('admin.messages.show', $m) }}" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center">Hozircha bo‘sh.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($messages->hasPages())
        <div class="card-footer">{{ $messages->links() }}</div>
        @endif
    </div>
@stop
