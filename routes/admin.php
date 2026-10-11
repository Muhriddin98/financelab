<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\StaticImageController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
        Route::get('messages/{message}', [MessageController::class, 'show'])->name('messages.show');
        Route::get('static-images', [StaticImageController::class, 'index'])->name('static-images.index');
        Route::get('static-images/{key}', [StaticImageController::class, 'edit'])->name('static-images.edit');
        Route::put('static-images/{key}', [StaticImageController::class, 'update'])->name('static-images.update');
        Route::resource('projects', ProjectController::class)->except('show');
        Route::resource('articles', ArticleController::class)->except('show');
        Route::post('upload-image', [ArticleController::class, 'uploadImage'])->name('upload-image');
        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('password', [ProfileController::class, 'editPassword'])->name('password.edit');
        Route::put('password', [ProfileController::class, 'updatePassword'])->name('password.update');
    });
});
