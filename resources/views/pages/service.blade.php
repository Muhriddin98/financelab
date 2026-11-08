@extends('layouts.app')

@section('content')
<main id="main">
    @include('partials.page-heading', ['label' => $group['title'], 'title' => $name, 'intro' => $description])
    <section class="detail-section">
        <div class="container detail-grid">
            <div class="detail-copy">
                <div class="service-card-icon" style="margin-bottom:18px">@include('partials.lucide', ['name' => $icon, 'size' => 34])</div>
                @foreach($body as $text)<p>{{ $text }}</p>@endforeach
                <a href="{{ ($localePrefix ?? '').'/contact/' }}" class="button">{{ $actions['discuss'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
            </div>
            <div class="detail-copy">
                <h2>{{ $group['title'] }}</h2>
                <p>{{ $group['description'] }}</p>
                <a href="{{ ($localePrefix ?? '').'/advisory/' }}" class="text-link">{{ $actions['services'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
            </div>
        </div>
    </section>
    @include('partials.final-cta')
</main>
@endsection
