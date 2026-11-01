<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Project;
use App\Services\SiteContent;
use Illuminate\Support\Facades\App;

/**
 * Dinamik sitemap.xml: 3 til (en ildizda, ru/uz prefiks) ×
 * bosh + 9 section + nashrdagi maqola/loyiha. Admin qo'shganda avtomatik.
 */
class SitemapController extends Controller
{
    public function index(SiteContent $content)
    {
        $urls = [];
        $locales = ['en' => '', 'ru' => '/ru', 'uz' => '/uz'];
        $sections = $content->sectionNames();
        $today = now()->format('Y-m-d');

        foreach ($locales as $locale => $prefix) {
            App::setLocale($locale);

            $urls[] = ['loc' => $prefix.'/', 'priority' => '1.0', 'changefreq' => 'weekly', 'lastmod' => $today];

            foreach ($sections as $section) {
                $urls[] = ['loc' => $prefix.'/'.$section.'/', 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $today];
            }

            $articles = Article::where('is_published', true)->where('locale', $locale)->get();
            foreach ($articles as $a) {
                $type = $a->isMedia() ? 'media' : 'insights';
                $urls[] = [
                    'loc' => $prefix.'/'.$type.'/'.$a->slug.'/',
                    'priority' => '0.6',
                    'changefreq' => 'monthly',
                    'lastmod' => ($a->updated_at ?? $a->published_at)?->format('Y-m-d') ?? $today,
                ];
            }

            $projects = Project::where('is_published', true)->where('locale', $locale)->get();
            foreach ($projects as $p) {
                $urls[] = [
                    'loc' => $prefix.'/projects/'.$p->slug.'/',
                    'priority' => '0.6',
                    'changefreq' => 'monthly',
                    'lastmod' => ($p->updated_at ?? now())?->format('Y-m-d') ?? $today,
                ];
            }
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n".'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
        foreach ($urls as $u) {
            // Kanonik: slashli (ichki havolalar bilan bir xil).
            $loc = rtrim(url($u['loc']), '/').'/';
            $xml .= '  <url><loc>'.e($loc).'</loc><lastmod>'.$u['lastmod'].'</lastmod><changefreq>'.$u['changefreq'].'</changefreq><priority>'.$u['priority'].'</priority></url>'."\n";
        }
        $xml .= '</urlset>';

        return response($xml, 200, ['Content-Type' => 'text/xml; charset=UTF-8']);
    }
}
