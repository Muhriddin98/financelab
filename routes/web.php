<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;use App\Http\Controllers\InsightController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use App\Services\SiteContent;
use Illuminate\Support\Facades\Route;

// EN ildizda (joriy URL lar o'zgarmaydi), RU /ru/, UZ /uz/ prefiksda. Slug lar barcha tilda bir xil.
$site = function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    foreach (app(SiteContent::class)->sectionNames() as $section) {
        Route::get($section, [SectionController::class, 'show'])->defaults('section', $section);
    }

    Route::get('projects/{slug}', [ProjectController::class, 'show']);
    Route::get('insights/{slug}', [InsightController::class, 'show']);
    Route::get('media/{slug}', [MediaController::class, 'show']);

    // Eski uzun xizmat sluglari → yangi qisqa URL lar (301, til prefiksini saqlaydi).
    $legacy = [
        'financial-modeling-investment-analysis' => 'financial-modeling',
        'independent-financial-review' => 'independent-review',
        'business-diagnostics-analysis' => 'business-diagnostics',
        'data-analytics-visualization' => 'data-analytics',
        'website-development-maintenance' => 'website-development',
    ];
    foreach ($legacy as $old => $new) {
        Route::get('advisory/'.$old, fn () => redirect(str_replace($old, $new, request()->path()).'/', 301));
    }

    Route::get('advisory/{service}', [ServiceController::class, 'show']);
};

$site();
Route::prefix('ru')->name('ru.')->group($site);
Route::prefix('uz')->name('uz.')->group($site);

Route::get('sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::post('contact', [ContactController::class, 'store'])->name('contact.send');
Route::post('ru/contact', [ContactController::class, 'store'])->name('ru.contact.send');
Route::post('uz/contact', [ContactController::class, 'store'])->name('uz.contact.send');
