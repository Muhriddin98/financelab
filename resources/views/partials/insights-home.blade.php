@php
$c = config('site.copy.insights'); $actions = config('site.copy.actions');
$insights = $insights ?? config('site.insights');
$link = $link ?? ['label' => $actions['insights'], 'href' => '/insights/'];
@endphp
<section id="insights" class="insights-section">
    <div class="container">
        @include('partials.section-header', ['label' => $c['label'], 'title' => $c['title'], 'link' => $link])
        <div class="insight-grid">
            @foreach($insights as $i)
            @include('partials.insight-card', ['item' => $i])
            @endforeach
        </div>
    </div>
</section>
