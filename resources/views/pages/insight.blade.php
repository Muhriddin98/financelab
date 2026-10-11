@extends('layouts.app')

@section('content')
<main id="main">
    @include('partials.page-heading', ['label' => $article['category'], 'title' => $article['title'], 'intro' => $article['intro']])
    <div class="container">
        <article class="article">
            <div class="article-meta">{{ __('ui.editorial') }} · {{ $article['date'] }} · {{ __('ui.min_read') }}</div>
            <div class="article-body">{!! clean($article->body ?? '', 'article') !!}</div>
            <p class="note">{{ __('ui.edu_note') }}</p>
            <a class="text-link" href="{{ ($localePrefix ?? '').'/insights/' }}">{{ __('ui.all_insights') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
        </article>
    </div>
</main>
@endsection
