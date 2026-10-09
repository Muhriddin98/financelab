@extends('layouts.app')

@section('content')
<main id="main">
    @include('partials.page-heading', ['label' => $article['category'], 'title' => $article['title'], 'intro' => $article['intro']])
    <div class="container">
        <article class="article">
            <div class="article-meta">{{ __('ui.editorial') }} · {{ $article['date'] }} · {{ __('ui.min_read') }}</div>
            <div class="article-image">@if(!empty($article['image_url']))<img src="{{ $article['image_url'] }}" alt="" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent">@endif</div>
            @foreach($article['body'] as $t)<p>{{ $t }}</p>@endforeach
            <p class="note">{{ __('ui.edu_note') }}</p>
            <a class="text-link" href="{{ ($localePrefix ?? '').'/insights/' }}">{{ __('ui.all_insights') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
        </article>
    </div>
</main>
@endsection
