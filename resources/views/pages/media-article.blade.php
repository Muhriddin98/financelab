@extends('layouts.app')

@section('content')
<main id="main">
    @include('partials.page-heading', ['label' => __('ui.media_page_label'), 'title' => $article['title'], 'intro' => $article['intro']])
    <div class="container">
        <article class="article">
            <div class="article-meta">{{ __('ui.editorial') }} · {{ $article['date'] }} · {{ __('ui.practical_guide') }}</div>
            <div class="article-body">{!! clean($article->body ?? '', 'article') !!}</div>
            <a class="text-link" href="{{ ($localePrefix ?? '').'/media/' }}">{{ __('ui.all_explainers') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
        </article>
    </div>
</main>
@endsection
