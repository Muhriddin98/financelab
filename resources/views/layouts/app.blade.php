<!DOCTYPE html>
<html lang="en" data-scroll-behavior="smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $metaTitle ?? 'FinanceLab | Financial Intelligence. Applied.' }}</title>
    <meta name="description" content="{{ $metaDescription ?? $siteDescription }}">
    <link rel="icon" href="/favicon.svg">
    <meta property="og:title" content="{{ $metaTitle ?? 'FinanceLab | Financial Intelligence. Applied.' }}">
    <meta property="og:description" content="{{ $metaDescription ?? $siteDescription }}">
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:locale" content="en_US">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="/css/site.css">
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
<script src="/js/site.js"></script>
</body>
</html>
