{{-- Cropped image from /design-reference.png sprite. Usage: @include('partials.reference-image', ['name' => 'hero', 'alt' => '...']) --}}
@php
$coords = ($refImages ?? [])[$name] ?? null;
$cls = trim('reference-image ' . ($class ?? ''));
$svgAttrs = !empty($alt) ? ' role="img" aria-label="'.e($alt).'"' : ' aria-hidden="true"';
@endphp
@if($name === 'mountains')
<img src="/images/mountains.webp" alt="{{ $alt ?? '' }}" class="reference-image mountain-photo {{ $class ?? '' }}">
@elseif($coords)
<svg class="{{ $cls }}" viewBox="{{ $coords[0] }} {{ $coords[1] }} {{ $coords[2] }} {{ $coords[3] }}" preserveAspectRatio="{{ $name === 'hero' ? 'xMidYMid meet' : 'xMidYMid slice' }}"{!! $svgAttrs !!} focusable="false"><svg x="{{ $coords[0] }}" y="{{ $coords[1] }}" width="{{ $coords[2] }}" height="{{ $coords[3] }}" viewBox="{{ $coords[0] }} {{ $coords[1] }} {{ $coords[2] }} {{ $coords[3] }}" overflow="hidden"><image href="/design-reference.png" width="852" height="1846"></image></svg></svg>
@endif
