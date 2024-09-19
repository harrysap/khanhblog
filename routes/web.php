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

Route::prefix('/blogs')->group(function () {
    Route::get('/', ListArticlesController::class)->name('blogs');
});
Route::name('admin.')->prefix('/{blogs:slug}')->group(function () {
    Route::get('/', ViewArticleController::class)->name('post.show');
});


