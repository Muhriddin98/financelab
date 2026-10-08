<?php

namespace App\Http\Controllers;

class MediaController extends Controller
{
    public function show(string $slug)
    {
        $article = $this->content->mediaArticle($slug);
        abort_if(! $article, 404);

        return $this->siteView('pages.media-article', [
            'article' => $article,
            'metaTitle' => $article['title'].' | FinanceLab',
            'metaDescription' => $article['intro'],
            'ogType' => 'article',
        ]);
    }
}
