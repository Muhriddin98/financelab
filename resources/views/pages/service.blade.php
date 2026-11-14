@extends('layouts.app')

@section('content')
<main id="main" class="service-page">
    <section class="page-heading svc-heading">
        <div class="container">
            <nav class="svc-crumb" aria-label="Breadcrumb">
                <a href="{{ ($localePrefix ?? '').'/' }}">{{ $siteName }}</a><span>/</span>
                <a href="{{ ($localePrefix ?? '').'/advisory/' }}">{{ __('ui.advisory_crumb') }}</a><span>/</span>
                <span>{{ $title }}</span>
            </nav>
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h1>{{ $title }}</h1>
            <p class="svc-lead">{{ $lead }}</p>
        </div>
    </section>

    <section class="detail-section svc-overview-section">
        <div class="container svc-overview">
            <div class="svc-overview-text">
                <p class="eyebrow">{{ __('ui.svc_overview') }}</p>
                <h2>{{ $overview_title }}</h2>
                @foreach($overview as $text)<p>{{ $text }}</p>@endforeach
            </div>
            <aside class="legal-short svc-short">
                <h3>@include('partials.lucide', ['name' => $short_icon, 'size' => 24])<span>{{ __('ui.in_short') }}</span></h3>
                <ul>
                    @foreach($short as $item)
                    <li>@include('partials.lucide', ['name' => 'check', 'size' => 18])<span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </section>

    <section class="detail-section svc-what">
        <div class="container">
            <h2 class="svc-block-title">{{ __('ui.what_we_do') }}</h2>
            <div class="svc-cards">
                @foreach($what as $card)
                <article class="svc-card">
                    <span class="svc-card-icon">@include('partials.lucide', ['name' => $card['icon'], 'size' => 28])</span>
                    <div>
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="detail-section svc-bottom">
        <div class="container svc-bottom-grid">
            <div class="svc-deliverables">
                <h2 class="svc-block-title">{{ __('ui.key_deliverables') }}</h2>
                <ul>
                    @foreach($deliverables as $item)
                    <li>@include('partials.lucide', ['name' => 'check-circle', 'size' => 20])<span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="svc-who">
                <h2 class="svc-block-title">{{ __('ui.who_we_work_with') }}</h2>
                <div class="svc-who-body">
                    <span class="svc-who-icon">@include('partials.lucide', ['name' => 'users', 'size' => 32])</span>
                    <p>{{ $who }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="svc-cta-wrap">
        <div class="container">
            <div class="svc-cta">
                <img src="/images/mountains.webp" alt="" class="svc-cta-bg">
                <div class="svc-cta-inner">
                    <h2>{{ $cta['title'] }}</h2>
                    <p>{{ $cta['text'] }}</p>
                    <a href="{{ ($localePrefix ?? '').'/contact/' }}" class="button">{{ $cta['button'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
