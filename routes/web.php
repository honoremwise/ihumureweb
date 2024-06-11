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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/new-article-frm', function () {
    return view('admin.new-article');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/', [\App\Http\Controllers\ArticleController::class, 'home'])->name('home');
Route::get('/new-article', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::post('/new-article', [\App\Http\Controllers\ArticleController::class, 'storeArticle']);
Route::post('/article-images', [\App\Http\Controllers\ArticleController::class, 'storeArticleImage']);
Route::post('/login', [\App\Http\Controllers\HomeController::class, 'login']);
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/articles/{slug}', [\App\Http\Controllers\ArticleController::class, 'getArticle'])->name('show');
// Route::get('/articles/{slug}', 'ArticleController@show')->name('show');
Route::get('/ubukerarugendo', [\App\Http\Controllers\ArticleController::class, 'home'])->name('ubukerarugendo');
Route::get('/siporo', [\App\Http\Controllers\ArticleController::class, 'home'])->name('siporo');
Route::get('/muzika', [\App\Http\Controllers\ArticleController::class, 'home'])->name('muzika');
Route::get('/politike', [\App\Http\Controllers\ArticleController::class, 'home'])->name('politike');
