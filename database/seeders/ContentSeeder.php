<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $site = config('site');
        $mediaSlugs = $site['media_slugs'];

        $projectImages = [
            'iron-ore' => '/images/iron-ore.webp',
            'ckd-localization' => '/images/ckd.webp',
            'tpe-floor-mats' => '/images/manufacturing.webp',
        ];
        $articleImages = [
            'uzbekistan-automotive' => '/images/automotive.webp',
            'robust-financial-model' => '/images/robust.webp',
            'mining-assumptions' => '/images/mining-assumptions.webp',
            'strategic-insights' => '/images/strategic.webp',
        ];

        foreach ($site['projects'] as $i => $p) {
            Project::updateOrCreate(
                ['slug' => $p['slug']],
                [
                    'industry' => $p['industry'],
                    'title' => $p['title'],
                    'description' => $p['description'],
                    'image' => $projectImages[$p['slug']] ?? $p['image'],
                    'scope' => $p['scope'] ?? [],
                    'sort_order' => $i,
                    'is_published' => true,
                ]
            );
        }

        foreach ($site['insights'] as $i => $a) {
            Article::updateOrCreate(
                ['slug' => $a['slug']],
                [
                    'type' => in_array($a['slug'], $mediaSlugs) ? 'media' : 'insight',
                    'category' => $a['category'],
                    'title' => $a['title'],
                    'published_at' => Carbon::parse($a['date']),
                    'image' => $articleImages[$a['slug']] ?? $a['image'],
                    'intro' => $a['intro'],
                    'body' => $a['body'],
                    'sort_order' => $i,
                    'is_published' => true,
                ]
            );
        }
    }
}
