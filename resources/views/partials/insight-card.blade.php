@php
$href = $item['href'] ?? ($localePrefix ?? '').'/'.(in_array($item['slug'], $mediaSlugs ?? []) ? 'media' : 'insights').'/'.$item['slug'].'/';
$cardImage = ($insightImages ?? [])[$item['slug']] ?? null;
@endphp
<a href="{{ $href }}" class="insight-card">
    <div class="insight-image">
        @if(!empty($item['image_url']))
        <img src="{{ $item['image_url'] }}" alt="" class="reference-image" style="object-fit:cover">
        @elseif($cardImage)
        @include('partials.reference-image', ['name' => $cardImage])
        @endif
    </div>
    <div class="insight-copy">
        <p class="card-category">{{ $item['category'] }}</p>
        <h3>{{ $item['title'] }}</h3>
        <div class="insight-meta"><time>{{ $item['date'] }}</time><span class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span></div>
    </div>
</a>
