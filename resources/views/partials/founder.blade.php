<section class="founder-section">
    <div class="container">
        <div class="founder-grid">
            <div class="founder-portrait">
                @if(is_file(public_path('images/founder.webp')))
                <img src="/images/founder.webp?v={{ @filemtime(public_path('images/founder.webp')) ?: 1 }}" alt="{{ __('ui.founder_alt') }}" style="width:100%;height:100%;object-fit:cover">
                @else
                @include('partials.reference-image', ['name' => 'founder', 'alt' => __('ui.founder_alt')])
                @endif
            </div>
            <div class="founder-bio">
                <p class="eyebrow">{{ __('ui.founder_eyebrow') }}</p>
                <h2>{{ $founder['name'] }}</h2>
                <p class="founder-role">{{ $founder['role'] }}</p>
                @foreach((array) $founder['bio'] as $para)<p>{{ $para }}</p>@endforeach
            </div>
            <div class="founder-metrics">
                @php $metricIcons = ['layers', 'calendar-days', 'network']; @endphp
                @foreach(array_slice($metrics, 0, 3) as $i => $m)
                <div><span class="metric-icon">@include('partials.lucide', ['name' => $metricIcons[$i], 'size' => 26])</span><span class="metric-text"><strong>{{ $m['value'] }}</strong><span>{{ $m['label'] }}</span></span></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
