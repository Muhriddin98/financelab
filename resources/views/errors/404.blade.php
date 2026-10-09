@extends('layouts.app')

@section('content')
<main id="main">
    <section class="page-heading">
        <div class="container">
            <p class="eyebrow">404</p>
            <h1>{{ __('ui.not_found_title') }}</h1>
            <p class="lead">{{ __('ui.not_found_lead') }}</p>
            <div class="section"><a href="{{ ($localePrefix ?? '').'/' }}" class="button">{{ __('ui.back_home') }} @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a></div>
        </div>
    </section>
</main>
@endsection
