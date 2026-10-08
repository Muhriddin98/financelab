@php $c = $copy['industries']; @endphp
<section id="industries" class="industries-section section">
    @include('partials.reference-image', ['name' => 'mountains', 'class' => 'industry-backdrop'])
    <div class="container">
        @include('partials.section-header', ['label' => $c['label'], 'title' => $c['title'], 'description' => $c['description'], 'link' => ['label' => $actions['experience'], 'href' => '/advisory/#industry-experience']])
        <div class="industry-grid">
            @foreach($industries as $ind)
            <a href="/advisory/#{{ $ind['anchor'] }}" class="industry-card">
                @include('partials.reference-image', ['name' => $industryImages[$ind['name']]])
                <div><h3>{{ $ind['name'] }}</h3><span class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
