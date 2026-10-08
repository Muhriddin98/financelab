@php $c = $copy['work']; @endphp
<section id="work" class="work-section section">
    <div class="container">
        @include('partials.section-header', ['label' => $c['label'], 'title' => $c['title'], 'link' => ['label' => $actions['projects'], 'href' => '/projects/']])
        <div class="project-grid">
            @foreach($projects as $p)
            <a href="/projects/{{ $p['slug'] }}/" class="project-card">
                <div class="project-image">
                    @if(isset($projectImages[$p['slug']]))
                    @include('partials.reference-image', ['name' => $projectImages[$p['slug']]])
                    @elseif(!empty($p['image']))
                    <img src="/{{ $p['image'] }}" alt="" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent">
                    @endif
                </div>
                <div class="project-copy"><p class="card-category">{{ $p['industry'] }}</p><h3>{{ $p['title'] }}</h3><p>{{ $p['description'] }}</p><span class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
