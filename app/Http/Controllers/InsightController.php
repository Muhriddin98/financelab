<?php

namespace App\Http\Controllers;

class InsightController extends Controller
{
    public function show(string $slug)
    {
        $article = $this->content->insight($slug);
        abort_if(! $article, 404);

        return $this->siteView('pages.insight', [
            'article' => $article,
            'metaTitle' => $article['title'].' | FinanceLab',
            'metaDescription' => $article['intro'],
            'ogType' => 'article',
        ]);
    }
}
