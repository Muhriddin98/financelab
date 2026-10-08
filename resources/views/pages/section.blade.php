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
                <h2>{{ $section === 'advisory' ? 'From an idea to an informed decision.' : ($section === 'academy' ? 'Learn the thinking behind the model.' : 'Financial intelligence, explained.') }}</h2>
                @foreach($page['body'] as $text)<p>{{ $text }}</p>@endforeach
                <a href="{{ $section === 'media' ? '#explainers' : '/contact/' }}" class="button">{{ $section === 'media' ? 'Explore explainers' : ($section === 'academy' ? 'Discuss learning needs' : 'Discuss a project') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
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
                <h2>Industry understanding.<br>Financial precision.</h2>
                <div class="industry-details">
                    @foreach($industries as $i => $ind)
                    <article id="{{ $ind['anchor'] }}"><h3>{{ $ind['name'] }}</h3><p>{{ $industryDescriptions[$i] }}</p></article>
                    @endforeach
                </div>
            </div>
            <a href="/projects/" class="button">Explore selected work @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
        </div>
    </section>
    @endif

    @if($section === 'about')
        @include('partials.pillars')
        @include('partials.founder')
        <section class="detail-section">
            <div class="container">
                <div class="detail-copy"><h2>{{ $siteTagline }}</h2><p>FinanceLab connects the work of solving financial problems with the responsibility of sharing knowledge. Advisory, Academy and Media bring the same analytical approach to different audiences.</p></div>
            </div>
        </section>
    @endif

    @if($section === 'projects')
    <section class="detail-section">
        <div class="container">
            <div class="project-grid">
                @foreach($projects as $p)
                <a href="/projects/{{ $p['slug'] }}/" class="project-card">
                    <div class="project-image">@include('partials.reference-image', ['name' => $projectImages[$p['slug']]])</div>
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
            <p class="eyebrow">Industry &amp; investment analysis</p>
            <h2>Understand the drivers. Assess the implications.</h2>
            <div class="insight-grid">
                @foreach($analytical as $i)@include('partials.insight-card', ['item' => $i])@endforeach
            </div>
        </div>
    </section>
    @endif

    @if($section === 'media')
    <section class="detail-section" id="explainers">
        <div class="container">
            <p class="eyebrow">We explain</p>
            <h2>Financial concepts, made practical.</h2>
            <p>Explore step-by-step guides and clear explanations of financial models, statements and business decisions.</p>
            <div class="insight-grid">
                @foreach($mediaArticles as $i)@include('partials.insight-card', ['item' => $i])@endforeach
            </div>
        </div>
    </section>
    <section class="detail-section">
        <div class="container">
            <p class="eyebrow">FinanceLab channels</p>
            <h2>Follow the conversation.</h2>
            <p>Connect with FinanceLab for financial perspectives, visual explanations and professional discussion.</p>
            <div class="service-details">
                @foreach($siteContact['socials'] as $s)
                <article class="service-detail"><h3>{{ $s['label'] }}</h3><p>{{ $s['label'] === 'Telegram' ? 'Follow the FinanceLab channel for updates and accessible financial explanations.' : 'Connect with Laziz Sherovatov for professional perspectives and discussion.' }}</p><a class="text-link" href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer">Open {{ $s['label'] }} ↗</a></article>
                @endforeach
                <article class="service-detail"><h3>Editorial enquiries</h3><p>Suggest a topic, discuss an interview or enquire about a media collaboration.</p><a href="/contact/" class="button">Discuss a topic @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a></article>
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
        <div class="container legal-copy"><h2>Information you enter</h2><p>The project brief form processes your entries in your browser to prepare an email draft or a downloadable text file. The website does not send the message automatically or save your entries in browser storage. If you send the draft through your email app, your name, contact details and message are shared with FinanceLab at the address shown on the Contact page.</p><h2>Website delivery</h2><p>The hosting provider may process technical information needed to deliver and protect this website, including network requests. This version does not add advertising or analytics trackers.</p><h2>Future contact services</h2><p>This notice should be updated when contact delivery, analytics or other data-processing services are introduced.</p></div>
    </section>
    @endif

    @if($section === 'terms')
    <section class="detail-section">
        <div class="container legal-copy"><h2>Informational materials</h2><p>The content on this site introduces FinanceLab and provides general analytical and educational information. It is not an individualized investment recommendation or an offer of financing.</p><h2>Project scopes</h2><p>Project descriptions illustrate types of analytical work. Specific engagements, deliverables and confidentiality obligations are agreed separately.</p><h2>Content and third-party assets</h2><p>FinanceLab branding and supplied materials remain subject to their owners’ rights. Photographic assets are used subject to the applicable third-party terms.</p></div>
    </section>
    @endif

    @if($showCta)@include('partials.final-cta')@endif
</main>
@endsection
