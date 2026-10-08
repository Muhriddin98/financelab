@extends('layouts.app')

@section('content')
<main id="main">
    @include('partials.page-heading', ['label' => $project['industry'], 'title' => $project['title'], 'intro' => $project['description']])
    <section class="detail-section">
        <div class="container detail-grid">
            <div class="detail-copy">
                <p class="eyebrow">Engagement scope</p>
                <h2>Analysis with a clear purpose.</h2>
                <ul>@foreach($project['scope'] as $s)<li>{{ $s }}</li>@endforeach</ul>
                <p>Client and transaction information is not disclosed. The scope above describes the analytical work represented by this project.</p>
                <a href="/contact/" class="button">Discuss a similar project @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a>
            </div>
            <div class="detail-image">@if(!empty($project['image_url']))<img src="{{ $project['image_url'] }}" alt="" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent">@endif</div>
        </div>
    </section>
</main>
@endsection
