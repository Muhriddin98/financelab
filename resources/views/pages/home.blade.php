@extends('layouts.app')

@section('content')
<main id="main" class="home-page">
    @include('partials.hero')
    @include('partials.pillars')
    @include('partials.expertise')
    @include('partials.industries')
    @include('partials.work')
    @include('partials.insights-home')
    @include('partials.founder')
    @include('partials.final-cta')
</main>
@endsection
