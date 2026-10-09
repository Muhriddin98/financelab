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

    /**
     * Joriy til datasi: EN da config o'zi, RU da lang/ru/site.php
     * ustiga merge (faqat statik matnlar; slug/image/href/DB tegilmaydi).
     */
    protected function data(): array
    {
        if (app()->getLocale() === 'en') {
            return $this->data;
        }
        $over = __('site');

        return is_array($over) ? array_replace_recursive($this->data, $over) : $this->data;
    }

    /** Har sahifada kerak bo'ladigan chrome: header/footer/layout (+404). */
    public function shared(): array
    {
        $d = $this->data();
        $locale = app()->getLocale();
        $prefix = $locale === 'en' ? '' : '/'.$locale;
        $nav = array_map(fn ($n) => ['label' => $n['label'], 'href' => $prefix.$n['href']], $d['site']['nav']);

        return [
            'siteName' => $d['site']['name'],
            'siteTagline' => $d['site']['tagline'],
            'siteDescription' => $d['site']['description'],
            'siteNav' => $nav,
            'siteContact' => $d['contact'],
            'siteCopyright' => $d['site']['footer']['copyright'],
        ];
    }

    /** Kontent sahifalar uchun umumiy to'plam. */
    public function common(): array
    {
        $d = $this->data();

        // industry_images EN nom bilan kalitlangan — RU da anchor orqali topiladi.
        $industryImages = [];
        foreach ($this->data['industries'] as $i => $orig) {
            $anchor = $d['industries'][$i]['anchor'] ?? $orig['anchor'];
            $industryImages[$anchor] = $d['industry_images'][$orig['name']] ?? null;
        }

        return [
            'pillars' => $d['pillars'],
            'services' => $d['services'],
            'serviceIcons' => $d['service_icons'],
            'serviceDescriptions' => $d['service_descriptions'],
            'industries' => $d['industries'],
            'industryImages' => $industryImages,
            'industryDescriptions' => $d['industry_descriptions'],
            'projects' => $this->projects(),
            'projectImages' => $d['project_images'],
            'insights' => $this->articles(),
            'insightImages' => $d['insight_images'],
            'mediaSlugs' => $d['media_slugs'],
            'copy' => $d['copy'],
            'actions' => $d['copy']['actions'],
            'founder' => $d['site']['founder'],
            'metrics' => $d['site']['metrics'],
            'hero' => $d['site']['hero'],
            'contactCopy' => $d['contact_copy'],
            'refImages' => $d['ref_images'],
        ];
    }

    public function sectionNames(): array
    {
        return array_keys($this->data['pages']);
    }

    public function section(string $section): ?array
    {
        $pages = $this->data()['pages'];
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
