<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Project;
use Illuminate\Database\Seeder;

/** Faqat rasm yo'llarini yangilaydi, matnlarga tegmaydi. Bir martalik. */
class UpdateContentImagesSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            'iron-ore' => '/images/iron-ore.webp',
            'ckd-localization' => '/images/ckd.webp',
            'tpe-floor-mats' => '/images/manufacturing.webp',
        ] as $slug => $image) {
            Project::where('slug', $slug)->update(['image' => $image]);
        }

        foreach ([
            'uzbekistan-automotive' => '/images/automotive.webp',
            'robust-financial-model' => '/images/robust.webp',
            'mining-assumptions' => '/images/mining-assumptions.webp',
            'strategic-insights' => '/images/strategic.webp',
        ] as $slug => $image) {
            Article::where('slug', $slug)->update(['image' => $image]);
        }
    }
}
