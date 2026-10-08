<div class="section-header">
    <div><p class="eyebrow">{{ $label }}</p><h2>{!! nl2br(e($title)) !!}</h2></div>
    @if(!empty($description) || !empty($link))
    <div class="section-intro">
        @if(!empty($description))
        <p>{{ $description }}</p>
        @endif
        @if(!empty($link))
        <a class="text-link" href="{{ $link['href'] }}">{{ $link['label'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
        @endif
    </div>
    @endif
</div>
