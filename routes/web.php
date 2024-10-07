<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Articles\ListArticlesController;
use App\Http\Controllers\Articles\ViewArticleController;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::prefix('/blog')->group(function () {
    Route::get('/', ListArticlesController::class)->name('blogs');
    Route::get('/search', function () {
        return view('search');
    })->name('search');
    Route::get('/category', function () {
        return view('categories');
    })->name('categories');
    Route::get('/category/{categoryName}', function ($categoryName) {
        return view('category', ['categoryName' => $categoryName]);
    })->name('category');
    Route::get('/{blogName}', function ($blogName) {
        return view('blog', ['blogName' => $blogName]);
    })->name('blog');
});

Route::name('admin.')->prefix('/{blog:slug}')->group(function () {
    Route::get('/', ViewArticleController::class)->name('post.show');
});


