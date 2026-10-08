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

        foreach ($site['projects'] as $i => $p) {
            Project::updateOrCreate(
                ['slug' => $p['slug']],
                [
                    'industry' => $p['industry'],
                    'title' => $p['title'],
                    'description' => $p['description'],
                    'image' => $p['image'],
                    'scope' => $p['scope'],
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
                    'image' => $a['image'],
                    'intro' => $a['intro'],
                    'body' => $a['body'],
                    'sort_order' => $i,
                    'is_published' => true,
                ]
            );
        }
    }
}
