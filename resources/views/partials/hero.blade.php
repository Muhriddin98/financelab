<section class="hero">
    <div class="hero-bg" aria-hidden="true"><img src="/images/hero.webp?v={{ @filemtime(public_path('images/hero.webp')) ?: 1 }}" alt=""></div>
    <div class="container">
        <div class="hero-main">
            <div class="hero-copy">
                <p class="eyebrow">{{ $hero['eyebrow'] }}</p>
                <h1>@foreach($hero['lines'] as $i => $line)<span{!! $i === 2 ? ' class="blue-text"' : '' !!}>{{ $line }}</span>@endforeach</h1>
                <p class="hero-description">{{ $hero['description'] }}</p>
                <div class="button-row">
                    <a href="#directions" class="button">{{ $actions['explore'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
                    <a href="{{ ($localePrefix ?? '').'/contact/' }}" class="button secondary">{{ $actions['discuss'] }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
                </div>
            </div>
        </div>
        <div class="hero-bottom">
            <div class="metrics">
                @foreach($metrics as $m)<div><strong>{{ $m['value'] }}</strong><span>{{ $m['label'] }}</span></div>@endforeach
            </div>
            <a class="scroll-cue" href="#directions" aria-label="{{ __('ui.scroll_aria') }}">@include('partials.lucide', ['name' => 'mouse'])<span>{{ __('ui.scroll') }}</span></a>
            <p>{{ $hero['note'] }}</p>
        </div>
    </div>
</section>
