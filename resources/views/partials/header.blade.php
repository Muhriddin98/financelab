<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header" id="site-header">
    <div class="container header-inner">
        <a href="/" class="logo" aria-label="FinanceLab home"><span class="logo-symbol"><img src="/financelab-brand.png" alt="" width="75" height="75"></span><span>Finance<span class="brand-blue">Lab</span></span></a>
        <nav class="desktop-nav" aria-label="Main navigation">
            @foreach($siteNav as $n)<a href="{{ $n['href'] }}">{{ $n['label'] }}</a>@endforeach
        </nav>
        <div class="header-actions">
            <details class="language">
                <summary aria-label="Language: English">EN @include('partials.lucide', ['name' => 'chevron-down', 'size' => 13])</summary>
                <div class="language-menu"><strong>English</strong><span>Русский — coming soon</span><span>O‘zbek — coming soon</span></div>
            </details>
            <a class="contact-button" href="/contact/">Contact</a>
            <button class="menu-button" id="menu-open" aria-label="Open navigation" aria-expanded="false">@include('partials.lucide', ['name' => 'menu'])</button>
        </div>
    </div>
</header>
<dialog class="mobile-drawer" id="mobile-drawer">
    <div class="drawer-top">
        <a href="/" class="logo" aria-label="FinanceLab home"><span class="logo-symbol"><img src="/financelab-brand.png" alt="" width="75" height="75"></span><span>Finance<span class="brand-blue">Lab</span></span></a>
        <button id="menu-close" aria-label="Close navigation">@include('partials.lucide', ['name' => 'x'])</button>
    </div>
    <nav aria-label="Mobile navigation">
        @foreach(array_merge($siteNav, [['label' => 'Contact', 'href' => '/contact/']]) as $n)<a href="{{ $n['href'] }}">{{ $n['label'] }}</a>@endforeach
    </nav>
    <p>Financial Intelligence. Applied.</p>
</dialog>
