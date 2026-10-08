<?php

use Illuminate\Support\Facades\Route;

function financelabSection(string $section): array
{
    $pages = config('site.pages');
    abort_if(! isset($pages[$section]), 404);

    $insights = collect(config('site.insights'));
    $slugs = config('site.media_slugs');

    return [
        'section' => $section,
        'page' => $pages[$section],
        'metaTitle' => $pages[$section]['label'].' | FinanceLab',
        'metaDescription' => $pages[$section]['intro'],
        'analytical' => $insights->reject(fn ($i) => in_array($i['slug'], $slugs))->values()->all(),
        'mediaArticles' => $insights->filter(fn ($i) => in_array($i['slug'], $slugs))->values()->all(),
    ];
}

Route::get('/', fn () => view('pages.home'))->name('home');

foreach (array_keys(config('site.pages')) as $section) {
    Route::get($section, fn () => view('pages.section', financelabSection($section)));
}

Route::get('projects/{slug}', function (string $slug) {
    $project = collect(config('site.projects'))->firstWhere('slug', $slug);
    abort_if(! $project, 404);

    return view('pages.project', [
        'project' => $project,
        'metaTitle' => $project['title'].' | FinanceLab',
        'metaDescription' => $project['description'],
    ]);
});

Route::get('insights/{slug}', function (string $slug) {
    $article = collect(config('site.insights'))->firstWhere('slug', $slug);
    abort_if(! $article || in_array($slug, config('site.media_slugs')), 404);

    return view('pages.insight', [
        'article' => $article,
        'metaTitle' => $article['title'].' | FinanceLab',
        'metaDescription' => $article['intro'],
        'ogType' => 'article',
    ]);
});

Route::get('media/{slug}', function (string $slug) {
    $article = collect(config('site.insights'))->firstWhere('slug', $slug);
    abort_if(! $article || ! in_array($slug, config('site.media_slugs')), 404);

    return view('pages.media-article', [
        'article' => $article,
        'metaTitle' => $article['title'].' | FinanceLab',
        'metaDescription' => $article['intro'],
        'ogType' => 'article',
    ]);
});
