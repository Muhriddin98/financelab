@php $c = config('site.copy.expertise'); $services = config('site.services'); $icons = config('site.service_icons'); $actions = config('site.copy.actions'); @endphp
<section id="expertise" class="expertise-section">
    <div class="container">
        @include('partials.section-header', ['label' => $c['label'], 'title' => $c['title'], 'description' => $c['description'], 'link' => ['label' => $actions['services'], 'href' => '/advisory/']])
        <div class="services">
            @foreach($services as $i => $s)
            <a class="service-item" href="/advisory/#service-{{ $i }}">@include('partials.lucide', ['name' => $icons[$i], 'size' => 37])<span>{{ $s }}</span></a>
            @endforeach
        </div>
    </div>
</section>
