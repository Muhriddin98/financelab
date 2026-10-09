<footer class="footer">
    <div class="container">
        <div class="footer-main">
            <div>
                <a href="{{ ($localePrefix ?? '').'/' }}" class="logo" aria-label="{{ __('ui.logo_home') }}"><span class="logo-symbol"><img src="/images/logo.webp" alt="" width="75" height="75"></span><span>Finance<span class="brand-blue">Lab</span></span></a>
                <p>{{ $siteTagline }}</p>
            </div>
            <nav aria-label="Footer navigation">
                @foreach(array_merge($siteNav, [['label' => __('ui.contact'), 'href' => ($localePrefix ?? '').'/contact/']]) as $n)<a href="{{ $n['href'] }}">{{ $n['label'] }}</a>@endforeach
            </nav>
            <div class="footer-social">
                @foreach($siteContact['socials'] as $s)<a href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $s['label'] }}">@include('partials.lucide', ['name' => $s['label'] === 'LinkedIn' ? 'linkedin' : 'send', 'size' => 18])</a>@endforeach
                <span class="footer-language">{{ strtoupper($locale ?? 'en') }}</span>
            </div>
        </div>
        <div class="footer-bottom">
            <p>{{ $siteCopyright }}</p>
            <div><a href="{{ ($localePrefix ?? '').'/privacy/' }}">{{ __('ui.privacy') }}</a><span aria-hidden="true">/</span><a href="{{ ($localePrefix ?? '').'/terms/' }}">{{ __('ui.terms') }}</a></div>
        </div>
    </div>
</footer>
