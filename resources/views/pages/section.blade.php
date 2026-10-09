@extends('layouts.app')

@php
$showCta = !in_array($section, ['contact', 'privacy', 'terms']);
@endphp

@section('content')
<main id="main">
    @include('partials.page-heading', ['label' => $page['label'], 'title' => $page['title'], 'intro' => $page['intro']])

    @if(!empty($page['body']))
    <section class="detail-section">
        <div class="container detail-grid">
            <div class="detail-copy">
                <h2>{{ $section === 'advisory' ? __('ui.sec_advisory_h2') : ($section === 'academy' ? __('ui.sec_academy_h2') : __('ui.sec_media_h2')) }}</h2>
                @foreach($page['body'] as $text)<p>{{ $text }}</p>@endforeach
                <a href="{{ $section === 'media' ? '#explainers' : ($localePrefix ?? '').'/contact/' }}" class="button">{{ $section === 'media' ? __('ui.explore_explainers') : ($section === 'academy' ? __('ui.discuss_learning') : __('ui.discuss_project')) }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
            </div>
            <div class="detail-image"><img src="{{ $page['image'] }}" alt="" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"></div>
        </div>
    </section>
    @endif

    @if($section === 'advisory')
    <section class="detail-section">
        <div class="container">
            <div class="service-details">
                @foreach($services as $i => $s)
                <article class="service-detail" id="service-{{ $i }}"><p class="eyebrow">0{{ $i + 1 }}</p><h3>{{ $s }}</h3><p>{{ $serviceDescriptions[$i] }}</p></article>
                @endforeach
            </div>
            <div id="industry-experience" class="section">
                <h2>{{ __('ui.ind_h2a') }}<br>{{ __('ui.ind_h2b') }}</h2>
                <div class="industry-details">
                    @foreach($industries as $i => $ind)
                    <article id="{{ $ind['anchor'] }}"><h3>{{ $ind['name'] }}</h3><p>{{ $industryDescriptions[$i] }}</p></article>
                    @endforeach
                </div>
            </div>
            <a href="{{ ($localePrefix ?? '').'/projects/' }}" class="button">{{ __('ui.explore_work') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
        </div>
    </section>
    @endif

    @if($section === 'about')
        @include('partials.pillars')
        @include('partials.founder')
        <section class="detail-section">
            <div class="container">
                <div class="detail-copy"><h2>{{ $siteTagline }}</h2><p>{{ __('ui.about_note') }}</p></div>
            </div>
        </section>
    @endif

    @if($section === 'projects')
    <section class="detail-section">
        <div class="container">
            <div class="project-grid">
                @foreach($projects as $p)
                <a href="{{ ($localePrefix ?? '').'/projects/'.$p['slug'].'/' }}" class="project-card">
                    <div class="project-image">
                        @if(!empty($p['image_url']))
                        <img src="{{ $p['image_url'] }}" alt="" class="reference-image" style="object-fit:cover">
                        @elseif(isset($projectImages[$p['slug']]))
                        @include('partials.reference-image', ['name' => $projectImages[$p['slug']]])
                        @endif
                    </div>
                    <div class="project-copy"><p class="card-category">{{ $p['industry'] }}</p><h3>{{ $p['title'] }}</h3><p>{{ $p['description'] }}</p><span class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span></div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if($section === 'insights')
    <section class="detail-section">
        <div class="container">
            <p class="eyebrow">{{ __('ui.insights_eyebrow') }}</p>
            <h2>{{ __('ui.insights_h2') }}</h2>
            <div class="insight-grid">
                @foreach($analytical as $i)@include('partials.insight-card', ['item' => $i])@endforeach
            </div>
        </div>
    </section>
    @endif

    @if($section === 'media')
    <section class="detail-section" id="explainers">
        <div class="container">
            <p class="eyebrow">{{ __('ui.media_eyebrow') }}</p>
            <h2>{{ __('ui.media_h2') }}</h2>
            <p>{{ __('ui.media_desc') }}</p>
            <div class="insight-grid">
                @foreach($mediaArticles as $i)@include('partials.insight-card', ['item' => $i])@endforeach
            </div>
        </div>
    </section>
    <section class="detail-section">
        <div class="container">
            <p class="eyebrow">{{ __('ui.channels_eyebrow') }}</p>
            <h2>{{ __('ui.channels_h2') }}</h2>
            <p>{{ __('ui.channels_desc') }}</p>
            <div class="service-details">
                @foreach($siteContact['socials'] as $s)
                <article class="service-detail"><h3>{{ $s['label'] }}</h3><p>{{ $s['label'] === 'Telegram' ? __('ui.telegram_desc') : __('ui.linkedin_desc') }}</p><a class="text-link" href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer">{{ __('ui.open_link', ['name' => $s['label']]) }}</a></article>
                @endforeach
                <article class="service-detail"><h3>{{ __('ui.editorial_h3') }}</h3><p>{{ __('ui.editorial_desc') }}</p><a href="{{ ($localePrefix ?? '').'/contact/' }}" class="button">{{ __('ui.discuss_topic') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a></article>
            </div>
        </div>
    </section>
    @endif

    @if($section === 'contact')
    <section class="detail-section">
        <div class="container contact-layout">
            <aside>
                <h2>{{ $contactCopy['heading'] }}</h2>
                @foreach($contactCopy['paragraphs'] as $t)<p>{{ $t }}</p>@endforeach
                <a class="contact-email" href="mailto:{{ $siteContact['email'] }}">{{ $siteContact['email'] }}</a>
                <div class="social-links">@foreach($siteContact['socials'] as $s)<a href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer">{{ $s['label'] }}</a>@endforeach</div>
            </aside>
            @include('partials.contact-form')
        </div>
    </section>
    @endif

    @if($section === 'privacy')
    <section class="detail-section">
        <div class="container legal-copy"><h2>{{ __('ui.privacy_h1') }}</h2><p>{{ __('ui.privacy_p1') }}</p><h2>{{ __('ui.privacy_h2') }}</h2><p>{{ __('ui.privacy_p2') }}</p><h2>{{ __('ui.privacy_h3') }}</h2><p>{{ __('ui.privacy_p3') }}</p></div>
    </section>
    @endif

    @if($section === 'terms')
    <section class="detail-section">
        <div class="container legal-copy"><h2>{{ __('ui.terms_h1') }}</h2><p>{{ __('ui.terms_p1') }}</p><h2>{{ __('ui.terms_h2') }}</h2><p>{{ __('ui.terms_p2') }}</p><h2>{{ __('ui.terms_h3') }}</h2><p>{{ __('ui.terms_p3') }}</p></div>
    </section>
    @endif

    @if($showCta)@include('partials.final-cta')@endif
</main>
@endsection
