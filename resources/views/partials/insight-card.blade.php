@php
$images = config('site.insight_images'); $slugs = config('site.media_slugs');
$href = '/' . (in_array($item['slug'], $slugs) ? 'media' : 'insights') . '/' . $item['slug'] . '/';
@endphp
<a href="{{ $href }}" class="insight-card">
    <div class="insight-image">@include('partials.reference-image', ['name' => $images[$item['slug']]])</div>
    <div class="insight-copy">
        <p class="card-category">{{ $item['category'] }}</p>
        <h3>{{ $item['title'] }}</h3>
        <div class="insight-meta"><time>{{ $item['date'] }}</time><span class="circle-arrow">@include('partials.lucide', ['name' => 'arrow-up-right', 'size' => 16])</span></div>
    </div>
</a>
