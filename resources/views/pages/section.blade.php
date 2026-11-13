@extends('layouts.app')

@php
    $showCta = !in_array($section, ['contact', 'privacy', 'terms']);
@endphp

@section('content')
    <main id="main" class="page-{{ $section }}">
        @include('partials.page-heading', ['label' => $page['label'], 'title' => $page['title'], 'intro' => $page['intro']])

        @if(!empty($page['body']))
            <section class="detail-section">
                <div class="container detail-grid">
                    <div class="detail-copy">
                        <h2>{{ $section === 'advisory' ? __('ui.sec_advisory_h2') : ($section === 'academy' ? __('ui.sec_academy_h2') : __('ui.sec_media_h2')) }}</h2>
                        @foreach($page['body'] as $text)<p>{{ $text }}</p>@endforeach
                        <a href="{{ $section === 'media' ? '#explainers' : ($localePrefix ?? '').'/contact/' }}"
                           class="button">{{ $section === 'media' ? __('ui.explore_explainers') : ($section === 'academy' ? __('ui.discuss_learning') : __('ui.discuss_project')) }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
                    </div>
                    <div class="detail-image"><img src="{{ $page['image'] }}" alt=""
                                                   style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent">
                    </div>
                </div>
            </section>
        @endif

        @if($section === 'advisory')
            <section class="detail-section">
                <div class="container">
                    @foreach($serviceGroups as $gi => $group)
                        @php $items = $gi === 0 ? range(0, 3) : range(4, 5); @endphp
                        <div class="service-group-head"><h2>{{ $group['title'] }}</h2>
                            <p>{{ $group['description'] }}</p></div>
                        <div class="service-cards">
                            @foreach($items as $i)
                                <article class="service-card">
                                    <div
                                        class="service-card-icon">@include('partials.lucide', ['name' => $serviceIcons[$i], 'size' => 30])</div>
                                    <div class="service-card-num">0{{ $i + 1 }}</div>
                                    <div class="service-card-body"><h3>{{ $services[$i] }}</h3>
                                        <p>{{ $serviceDescriptions[$i] }}</p><a class="text-link"
                                                                                href="{{ ($localePrefix ?? '').'/advisory/'.$serviceSlugs[$i].'/' }}">{{ $actions['learn'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    @endforeach
                    <div id="industry-experience" class="section">
                        <h2>{{ __('ui.ind_h2a') }}<br>{{ __('ui.ind_h2b') }}</h2>
                        <div class="industry-details">
                            @foreach($industries as $i => $ind)
                                <article id="{{ $ind['anchor'] }}"><h3>{{ $ind['name'] }}</h3>
                                    <p>{{ $industryDescriptions[$i] }}</p></article>
                            @endforeach
                        </div>
                    </div>
                    <a href="{{ ($localePrefix ?? '').'/projects/' }}"
                       class="button">{{ __('ui.explore_work') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
                </div>
            </section>
        @endif

        @if($section === 'about')
            <section class="detail-section about-who">
                <div class="container detail-grid">
                    <div class="detail-copy">
                        <p class="eyebrow">{{ $aboutPage['who']['label'] }}</p>
                        <h2>{{ $aboutPage['who']['title'] }}</h2>
                        @foreach($aboutPage['who']['paragraphs'] as $t)<p>{{ $t }}</p>@endforeach
                    </div>
                    <div class="detail-image about-photo">
                        @if(is_file(public_path('images/about.webp')))
                        <img src="/images/about.webp?v={{ @filemtime(public_path('images/about.webp')) ?: 1 }}" alt="FinanceLab" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent">
                        @else
                        <img src="/images/media.webp" alt="FinanceLab" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent">
                        @endif
                    </div>
                </div>
            </section>

            <section class="detail-section about-approach">
                <div class="container detail-grid">
                    <div class="detail-copy">
                        <p class="eyebrow">{{ $aboutPage['approach']['label'] }}</p>
                        <h2>{{ $aboutPage['approach']['title'] }}</h2>
                        @foreach($aboutPage['approach']['paragraphs'] as $t)<p>{{ $t }}</p>@endforeach
                    </div>
                    <div class="approach-cards">
                        @foreach($aboutPage['approach']['cards'] as $card)
                        <article class="approach-card">
                            <span class="approach-icon">@include('partials.lucide', ['name' => $card['icon'], 'size' => 30])</span>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['text'] }}</p>
                        </article>
                        @endforeach
                    </div>
                </div>
            </section>

            @include('partials.pillars', ['label' => __('ui.three_directions'), 'description' => __('ui.three_directions_desc')])
            @include('partials.founder')
        @endif

        @if($section === 'projects')
            <section class="detail-section">
                <div class="container">
                    <div class="split-head"><h2>{{ __('ui.featured_title') }}</h2></div>
                    <div class="project-grid">
                        @foreach($projects as $p)
                            <a href="{{ ($localePrefix ?? '').'/projects/'.$p['slug'].'/' }}" class="project-card">
                                <div class="project-image">
                                    @if(!empty($p['image_url']))
                                        <img src="{{ $p['image_url'] }}" alt="" class="reference-image"
                                             style="object-fit:cover">
                                    @elseif(isset($projectImages[$p['slug']]))
                                        @include('partials.reference-image', ['name' => $projectImages[$p['slug']]])
                                    @endif
                                </div>
                                <div class="project-copy"><p class="card-category">{{ $p['industry'] }}</p>
                                    <h3>{{ $p['title'] }}</h3>
                                    <p>{{ $p['description'] }}</p><span
                                        class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="detail-section" id="portfolio">
                <div class="container">
                    <div class="split-head"><h2>{{ __('ui.portfolio_title') }}</h2>
                        <p>{{ __('ui.portfolio_sub') }}</p></div>
                    <div class="industry-accordion">
                        @foreach($portfolio as $gi => $ind)
                            @php $icon = ['mountain','car','factory','zap','landmark'][$gi] ?? 'briefcase'; @endphp
                            <details class="ind-acc">
                                <summary>
                                    <span
                                        class="ind-acc-icon">@include('partials.lucide', ['name' => $icon, 'size' => 26])</span>
                                    <strong>{{ $ind['name'] }}</strong>
                                    <span
                                        class="ind-acc-count">{{ $ind['projects']->count() }} {{ __('ui.projects_badge') }}</span>
                                    <span
                                        class="ind-acc-chevron">@include('partials.lucide', ['name' => 'chevron-down', 'size' => 18])</span>
                                </summary>
                                <div class="table-wrap">
                                    <table class="portfolio-table">
                                        <thead>
                                        <tr>
                                            <th>{{ __('ui.th_project') }}</th>
                                            <th>{{ __('ui.th_initiator') }}</th>
                                            <th>{{ __('ui.th_capex') }}</th>
                                            <th>{{ __('ui.th_scope') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($ind['projects'] as $p)
                                            <tr>
                                                <td>{{ $p['title'] }}</td>
                                                <td>{{ $p['initiator'] ?? '—' }}</td>
                                                <td>{{ $p['capex'] ?? '—' }}</td>
                                                <td>{{ $p['scope'] }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">—</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </details>
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
                            <article class="service-detail"><h3>{{ $s['label'] }}</h3>
                                <p>{{ $s['label'] === 'Telegram' ? __('ui.telegram_desc') : __('ui.linkedin_desc') }}</p>
                                <a class="text-link" href="{{ $s['href'] }}" target="_blank"
                                   rel="noopener noreferrer">{{ __('ui.open_link', ['name' => $s['label']]) }}</a>
                            </article>
                        @endforeach
                        <article class="service-detail"><h3>{{ __('ui.editorial_h3') }}</h3>
                            <p>{{ __('ui.editorial_desc') }}</p><a href="{{ ($localePrefix ?? '').'/contact/' }}"
                                                                   class="button">{{ __('ui.discuss_topic') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
                        </article>
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
                        <div class="contact-lines">
                            <div class="contact-line">
                                <span class="line-icon">@include('partials.lucide', ['name' => 'mail', 'size' => 20])</span>
                                <span class="line-body"><small>{{ __('ui.c_email') }}</small><a class="line-value contact-email" href="mailto:{{ $siteContact['email'] }}">{{ $siteContact['email'] }}</a></span>
                            </div>
                            <div class="contact-line">
                                <span class="line-icon">@include('partials.lucide', ['name' => 'phone', 'size' => 20])</span>
                                <span class="line-body"><small>{{ __('ui.c_phone') }}</small><a class="line-value" href="tel:{{ preg_replace('/\D+/', '', $siteContact['phone']) }}">{{ $siteContact['phone'] }}</a></span>
                            </div>
                            <div class="contact-line">
                                <span class="line-icon">@include('partials.lucide', ['name' => 'map-pin', 'size' => 20])</span>
                                <span class="line-body"><small>{{ __('ui.c_location') }}</small><span class="line-value" style="color:var(--ink)">{{ __('ui.c_location_value') }}</span></span>
                            </div>
                        </div>
                        <h3 class="connect-head">{{ __('ui.c_connect') }}</h3>
                        <div class="social-links">@foreach($siteContact['socials'] as $s)<a href="{{ $s['label'] === 'Telegram' ? 'https://t.me/Luchnik' : $s['href'] }}" target="_blank" rel="noopener noreferrer">@include('partials.lucide', ['name' => $s['label'] === 'LinkedIn' ? 'linkedin' : 'send', 'size' => 18])<span>{{ $s['label'] }}</span></a>@endforeach</div>
                    </aside>
                    @include('partials.contact-form')
                </div>
            </section>
        @endif

        @if($section === 'privacy')
            @include('partials.legal')
        @endif

        @if($section === 'terms')
            @include('partials.legal')
        @endif

        @if($showCta)@include('partials.final-cta')@endif
    </main>
@endsection
