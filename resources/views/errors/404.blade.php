@extends('layouts.app')

@section('content')
<main id="main">
    <section class="page-heading">
        <div class="container">
            <p class="eyebrow">404</p>
            <h1>This page could not be found.</h1>
            <p class="lead">Return to FinanceLab to explore our work and insights.</p>
            <div class="section"><a href="/" class="button">Back to FinanceLab @include('partials.lucide', ['name' => 'arrow-right', 'size' => 17])</a></div>
        </div>
    </section>
</main>
@endsection
