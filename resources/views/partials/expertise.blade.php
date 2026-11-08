@php $c = $copy['expertise']; @endphp
<section id="expertise" class="expertise-section">
    <div class="container">
        @include('partials.section-header', ['label' => $c['label'], 'title' => $c['title'], 'description' => $c['description'], 'link' => ['label' => $actions['services'], 'href' => ($localePrefix ?? '').'/advisory/']])
        <div class="services">
            @foreach($services as $i => $s)
            <div class="service-item">@include('partials.lucide', ['name' => $serviceIcons[$i], 'size' => 28])<span>{{ $s }}</span></div>
            @endforeach
        </div>
    </div>
</section>
