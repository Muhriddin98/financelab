<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Project;

/**
 * Site content repository.
 *
 * Hozir content config/site.php dan o'qiladi. Admin panel + DB tayyor
 * bo'lgach, shu metodlar ichi DB so'rovlarga almashadi — controller
 * va view lar o'zgarmaydi.
 */
class SiteContent
{
    protected array $data;

    public function __construct()
    {
        $this->data = config('site');
    }

    /** Har sahifada kerak bo'ladigan chrome: header/footer/layout (+404). */
    public function shared(): array
    {
        return [
            'siteName' => $this->data['site']['name'],
            'siteTagline' => $this->data['site']['tagline'],
            'siteDescription' => $this->data['site']['description'],
            'siteNav' => $this->data['site']['nav'],
            'siteContact' => $this->data['contact'],
            'siteCopyright' => $this->data['site']['footer']['copyright'],
        ];
    }

    /** Kontent sahifalar uchun umumiy to'plam. */
    public function common(): array
    {
        return [
            'pillars' => $this->data['pillars'],
            'services' => $this->data['services'],
            'serviceIcons' => $this->data['service_icons'],
            'serviceDescriptions' => $this->data['service_descriptions'],
            'industries' => $this->data['industries'],
            'industryImages' => $this->data['industry_images'],
            'industryDescriptions' => $this->data['industry_descriptions'],
            'projects' => $this->projects(),
            'projectImages' => $this->data['project_images'],
            'insights' => $this->articles(),
            'insightImages' => $this->data['insight_images'],
            'mediaSlugs' => $this->data['media_slugs'],
            'copy' => $this->data['copy'],
            'actions' => $this->data['copy']['actions'],
            'founder' => $this->data['site']['founder'],
            'metrics' => $this->data['site']['metrics'],
            'hero' => $this->data['site']['hero'],
            'contactCopy' => $this->data['contact_copy'],
            'refImages' => $this->data['ref_images'],
        ];
    }

    public function sectionNames(): array
    {
        return array_keys($this->data['pages']);
    }

    public function section(string $section): ?array
    {
        $pages = $this->data['pages'];
        if (! isset($pages[$section])) {
            return null;
        }

        return [
            'section' => $section,
            'page' => $pages[$section],
            'metaTitle' => $pages[$section]['label'].' | FinanceLab',
            'metaDescription' => $pages[$section]['intro'],
            'analytical' => $this->analytical(),
            'mediaArticles' => $this->mediaArticles(),
        ];
    }

    public function projects()
    {
        return Project::where('is_published', true)->orderBy('sort_order')->get();
    }

    public function project(string $slug): ?Project
    {
        return Project::where('slug', $slug)->where('is_published', true)->first();
    }

    public function articles()
    {
        return Article::where('is_published', true)->orderBy('sort_order')->get();
    }

    public function analytical()
    {
        return $this->articles()->where('type', 'insight')->values();
    }

    public function mediaArticles()
    {
        return $this->articles()->where('type', 'media')->values();
    }

    public function insight(string $slug): ?Article
    {
        $article = Article::where('slug', $slug)->where('is_published', true)->first();

        return $article && ! $article->isMedia() ? $article : null;
    }

    public function mediaArticle(string $slug): ?Article
    {
        $article = Article::where('slug', $slug)->where('is_published', true)->first();

        return $article && $article->isMedia() ? $article : null;
    }
}
