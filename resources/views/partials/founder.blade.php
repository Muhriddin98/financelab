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
                <p>{{ $founder['bio'] }}</p>
                <a class="text-link" href="{{ ($localePrefix ?? '').'/about/' }}">{{ $actions['learn'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
            </div>
            <div class="founder-metrics">
                @foreach(array_slice($metrics, 0, 3) as $m)<div><strong>{{ $m['value'] }}</strong><span>{{ $m['label'] }}</span></div>@endforeach
                <div><strong>{{ __('ui.impact_value') }}</strong><span>{{ __('ui.impact_label') }}</span></div>
            </div>
        </div>
    </div>
</section>
