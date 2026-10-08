<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SectionController;
use App\Services\SiteContent;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

foreach (app(SiteContent::class)->sectionNames() as $section) {
    Route::get($section, [SectionController::class, 'show'])->defaults('section', $section);
}

Route::get('projects/{slug}', [ProjectController::class, 'show']);
Route::get('insights/{slug}', [InsightController::class, 'show']);
Route::get('media/{slug}', [MediaController::class, 'show']);
