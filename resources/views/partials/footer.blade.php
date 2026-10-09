<footer class="footer">
    <div class="container">
        <div class="footer-main">
            <div>
                <a href="/" class="logo" aria-label="FinanceLab home"><span class="logo-symbol"><img src="/images/logo.webp" alt="" width="75" height="75"></span><span>Finance<span class="brand-blue">Lab</span></span></a>
                <p>Financial Intelligence. Applied.</p>
            </div>
            <nav aria-label="Footer navigation">
                @foreach(array_merge($siteNav, [['label' => 'Contact', 'href' => '/contact/']]) as $n)<a href="{{ $n['href'] }}">{{ $n['label'] }}</a>@endforeach
            </nav>
            <div class="footer-social">
                @foreach($siteContact['socials'] as $s)<a href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $s['label'] }}">@include('partials.lucide', ['name' => $s['label'] === 'LinkedIn' ? 'linkedin' : 'send', 'size' => 18])</a>@endforeach
                <span class="footer-language">EN</span>
            </div>
        </div>
        <div class="footer-bottom">
            <p>{{ $siteCopyright }}</p>
            <div><a href="/privacy/">Privacy Policy</a><span aria-hidden="true">/</span><a href="/terms/">Terms</a></div>
        </div>
    </div>
</footer>
