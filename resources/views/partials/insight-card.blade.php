@php
$href = $item['href'] ?? '/'.(in_array($item['slug'], $mediaSlugs ?? []) ? 'media' : 'insights').'/'.$item['slug'].'/';
$cardImage = ($insightImages ?? [])[$item['slug']] ?? null;
@endphp
<a href="{{ $href }}" class="insight-card">
    <div class="insight-image">
        @if($cardImage)
        @include('partials.reference-image', ['name' => $cardImage])
        @elseif(!empty($item['image_url']))
        <img src="{{ $item['image_url'] }}" alt="" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent">
        @endif
    </div>
    <div class="insight-copy">
        <p class="card-category">{{ $item['category'] }}</p>
        <h3>{{ $item['title'] }}</h3>
        <div class="insight-meta"><time>{{ $item['date'] }}</time><span class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span></div>
    </div>
</a>
