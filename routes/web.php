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
use App\Http\Controllers\user\UserController;

Route::get('/', function () {
    return view('welcome');
});

//for admin
Route::group(['prefix' => 'admin',  'as'=>'admin.'], function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});


Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/categories', [CategoryController::class, 'index']) ->name('categories');
Route::get('/news/categories/{category}', [CategoryController::class, 'show'])
    ->where('category', '\w+')
    ->name('category');
Route::get('/news/show/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/user', [UserController::class, 'index']) ->name('user');
Route::post('/user/feedback', [UserController::class, 'saveUserFeedback'])->name('userFeedback');
Route::post('/user/order', [UserController::class, 'saveUserOrder'])->name('userOrder') ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
