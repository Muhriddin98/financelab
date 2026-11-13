@php $doc = $legal[$section]; @endphp
<section class="detail-section legal-section-wrap">
    <div class="container legal-layout">
        <div class="legal-main">
            @if($doc['updated'])
            <span class="legal-updated">@include('partials.lucide', ['name' => 'calendar', 'size' => 16]){{ $doc['updated'] }}</span>
            @endif
            @if($doc['intro'])
            <p class="legal-intro">{{ $doc['intro'] }}</p>
            @endif

            @foreach($doc['sections'] as $block)
            <article class="legal-block">
                <span class="legal-icon">@include('partials.lucide', ['name' => $block['icon'], 'size' => 30])</span>
                <div class="legal-block-body">
                    <h2>{{ $block['title'] }}</h2>
                    <p>{{ $block['text'] }}</p>
                </div>
            </article>
            @endforeach
        </div>

        <aside class="legal-side">
            <div class="legal-short">
                <h3>@include('partials.lucide', ['name' => $section === 'terms' ? 'scale' : 'lock', 'size' => 24])<span>{{ $doc['short_title'] }}</span></h3>
                <ul>
                    @foreach($doc['short'] as $item)
                    <li>@include('partials.lucide', ['name' => 'check', 'size' => 18])<span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>

            @if($section === 'privacy')
            <div class="legal-contact">
                <h3>{{ __('ui.privacy_contact') }}</h3>
                <div class="contact-line">
                    <span class="line-icon">@include('partials.lucide', ['name' => 'mail', 'size' => 20])</span>
                    <span class="line-body"><small>{{ __('ui.c_email') }}</small><a class="line-value" href="mailto:{{ $siteContact['email'] }}">{{ $siteContact['email'] }}</a></span>
                </div>
                <div class="contact-line">
                    <span class="line-icon">@include('partials.lucide', ['name' => 'phone', 'size' => 20])</span>
                    <span class="line-body"><small>{{ __('ui.c_phone') }}</small><a class="line-value" href="tel:{{ preg_replace('/\D+/', '', $siteContact['phone']) }}">{{ $siteContact['phone'] }}</a></span>
                </div>
                <div class="contact-line">
                    <span class="line-icon">@include('partials.lucide', ['name' => 'map-pin', 'size' => 20])</span>
                    <span class="line-body"><small>{{ __('ui.c_location') }}</small><span class="line-value">{{ __('ui.c_location_value') }}</span></span>
                </div>
            </div>
            @endif
        </aside>
    </div>
</section>
