<section class="founder-section">
    <div class="container">
        <div class="founder-grid">
            <div class="founder-portrait">@include('partials.reference-image', ['name' => 'founder', 'alt' => 'Founder portrait placeholder from the supplied design reference'])</div>
            <div class="founder-bio">
                <p class="eyebrow">Founder</p>
                <h2>{{ $founder['name'] }}</h2>
                <p class="founder-role">{{ $founder['role'] }}</p>
                <p>{{ $founder['bio'] }}</p>
                <a class="text-link" href="/about/">{{ $actions['learn'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
            </div>
            <div class="founder-metrics">
                @foreach(array_slice($metrics, 0, 3) as $m)<div><strong>{{ $m['value'] }}</strong><span>{{ $m['label'] }}</span></div>@endforeach
                <div><strong>Real impact</strong><span>Through analysis &amp; knowledge</span></div>
            </div>
        </div>
    </div>
</section>
