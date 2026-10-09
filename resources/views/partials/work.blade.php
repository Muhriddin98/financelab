@php $c = $copy['work']; @endphp
<section id="work" class="work-section section">
    <div class="container">
        @include('partials.section-header', ['label' => $c['label'], 'title' => $c['title'], 'link' => ['label' => $actions['projects'], 'href' => ($localePrefix ?? '').'/projects/']])
        <div class="project-grid">
            @foreach($projects as $p)
            <a href="{{ ($localePrefix ?? '').'/projects/'.$p['slug'].'/' }}" class="project-card">
                <div class="project-image">
                    @if(!empty($p['image_url']))
                    <img src="{{ $p['image_url'] }}" alt="" class="reference-image" style="object-fit:cover">
                    @elseif(isset($projectImages[$p['slug']]))
                    @include('partials.reference-image', ['name' => $projectImages[$p['slug']]])
                    @endif
                </div>
                <div class="project-copy"><p class="card-category">{{ $p['industry'] }}</p><h3>{{ $p['title'] }}</h3><p>{{ $p['description'] }}</p><span class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
