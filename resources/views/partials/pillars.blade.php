@php $c = $copy['pillars']; @endphp
<section id="directions" class="pillars-section section">
    <div class="container">
        @include('partials.section-header', ['label' => $c['label'], 'title' => $c['title'], 'description' => $c['description'] ?? null])
        <div class="pillar-grid">
            @foreach($pillars as $p)
            <a href="{{ ($localePrefix ?? '').'/'.$p['slug'].'/' }}" class="pillar-card {{ $p['color'] }}">
                <img src="{{ $p['image'] }}" alt="" class="reference-image" style="object-fit:cover">
                <div class="pillar-content">
                    <div class="pillar-name"><span>{{ $p['number'] }}</span><h3>Finance<span>Lab</span><br>{{ $p['name'] }}</h3></div>
                    <p class="pillar-verb">{{ $p['verb'] }}</p>
                    <p class="pillar-description">{{ $p['description'] }}</p>
                    <span class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
