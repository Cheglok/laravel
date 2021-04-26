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
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Admin\AdminUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' =>'auth'], function (){
    Route::get('/logout', function (){
       Auth::logout();
       return redirect()->route('login');
    });
//for account
Route::get('/account', AccountController::class)
->name('account');
//for admin
Route::group(['prefix' => 'admin',  'as'=>'admin.', 'middleware'=>'admin'], function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
    Route::resource('users', AdminUserController::class);
});
});


//for all
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

