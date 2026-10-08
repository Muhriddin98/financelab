@php $cta = config('site.copy.cta'); $actions = config('site.copy.actions'); @endphp
<section class="final-cta">
    @include('partials.reference-image', ['name' => 'mountains'])
    <div class="container">
        <div><p class="eyebrow">{{ $cta['label'] }}</p><h2>{!! nl2br(e($cta['title'])) !!}</h2></div>
        <div class="button-row">
            <a href="/contact/" class="button">{{ $actions['discuss'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
            <a href="/#directions" class="button secondary">{{ $actions['explore'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
        </div>
    </div>
</section>
