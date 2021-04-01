<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;

//for admin
Route::group(['prefix' => 'admin',  'as'=>'admin.'], function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});



Route::get('/', [WelcomeController::class, 'index']) ->name('welcome');
Route::get('/news/categories', [CategoryController::class, 'index']) ->name('categories');
Route::get('/news/categories/{category}', [CategoryController::class, 'showCategory'])->name('category');
Route::get('/news/show/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');
