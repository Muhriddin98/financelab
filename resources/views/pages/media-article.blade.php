@extends('layouts.app')

@section('content')
<main id="main">
    @include('partials.page-heading', ['label' => 'FinanceLab Media · We explain', 'title' => $article['title'], 'intro' => $article['intro']])
    <div class="container">
        <article class="article">
            <div class="article-meta">FinanceLab Editorial · {{ $article['date'] }} · Practical guide</div>
            <div class="article-image"><img src="{{ $article['image'] }}" alt="" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"></div>
            @foreach($article['body'] as $text)<p>{{ $text }}</p>@endforeach
            <a class="text-link" href="/media/">All explainers and guides @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
        </article>
    </div>
</main>
@endsection
