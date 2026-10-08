@extends('layouts.app')

@section('content')
<main id="main">
    @include('partials.page-heading', ['label' => $article['category'], 'title' => $article['title'], 'intro' => $article['intro']])
    <div class="container">
        <article class="article">
            <div class="article-meta">FinanceLab Editorial · {{ $article['date'] }} · 3 min read</div>
            <div class="article-image">@if(!empty($article['image_url']))<img src="{{ $article['image_url'] }}" alt="" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent">@endif</div>
            @foreach($article['body'] as $t)<p>{{ $t }}</p>@endforeach
            <p class="note">An introductory educational note. Assumptions should be evaluated in the context of each project.</p>
            <a class="text-link" href="/insights/">All insights @include('partials.lucide', ['name' => 'arrow-right', 'size' => 16])</a>
        </article>
    </div>
</main>
@endsection
