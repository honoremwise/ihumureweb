<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('bootstrap-news-template.index');
});

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::post('/new-article', [\App\Http\Controllers\ArticleController::class, 'storeArticle']);
Route::post('/article-images', [\App\Http\Controllers\ArticleController::class, 'storeArticleImage']);
