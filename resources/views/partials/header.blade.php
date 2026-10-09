<a class="skip-link" href="#main">{{ __('ui.skip') }}</a>
<header class="site-header" id="site-header">
    <div class="container header-inner">
        <a href="{{ ($localePrefix ?? '').'/' }}" class="logo" aria-label="{{ __('ui.logo_home') }}"><span class="logo-symbol"><img src="/images/logo.webp" alt="" width="75" height="75"></span><span>Finance<span class="brand-blue">Lab</span></span></a>
        <nav class="desktop-nav" aria-label="Main navigation">
            @foreach($siteNav as $n)<a href="{{ $n['href'] }}">{{ $n['label'] }}</a>@endforeach
        </nav>
        <div class="header-actions">
            <details class="language">
                <summary aria-label="{{ __('ui.language') }}: {{ ($locale ?? 'en') === 'ru' ? 'Русский' : (($locale ?? 'en') === 'uz' ? 'Oʻzbekcha' : 'English') }}">{{ strtoupper($locale ?? 'en') }} @include('partials.lucide', ['name' => 'chevron-down', 'size' => 13])</summary>
                <div class="language-menu"><a href="{{ $enUrl ?? '/' }}"><strong>English</strong></a><a href="{{ $ruUrl ?? '/ru' }}"><strong>Русский</strong></a><a href="{{ $uzUrl ?? '/uz' }}"><strong>Oʻzbekcha</strong></a></div>
            </details>
            <a class="contact-button" href="{{ ($localePrefix ?? '').'/contact/' }}">{{ __('ui.contact') }}</a>
            <button class="menu-button" id="menu-open" aria-label="Open navigation" aria-expanded="false">@include('partials.lucide', ['name' => 'menu'])</button>
        </div>
    </div>
</header>
<dialog class="mobile-drawer" id="mobile-drawer">
    <div class="drawer-top">
        <a href="{{ ($localePrefix ?? '').'/' }}" class="logo" aria-label="{{ __('ui.logo_home') }}"><span class="logo-symbol"><img src="/images/logo.webp" alt="" width="75" height="75"></span><span>Finance<span class="brand-blue">Lab</span></span></a>
        <button id="menu-close" aria-label="Close navigation">@include('partials.lucide', ['name' => 'x'])</button>
    </div>
    <nav aria-label="Mobile navigation">
        @foreach(array_merge($siteNav, [['label' => __('ui.contact'), 'href' => ($localePrefix ?? '').'/contact/']]) as $n)<a href="{{ $n['href'] }}">{{ $n['label'] }}</a>@endforeach
    </nav>
    <p>{{ $siteTagline }}</p>
</dialog>
