<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryControllr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'auth'], function () {
    Route::get('/new_cate',[CategoryControllr::class, 'create'])->name('addcate');
    Route::get('/list_cate',[CategoryControllr::class, 'index'])->name('all_category');
    Route::post('/save_cate',[CategoryControllr::class,'store']);
});

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'CreatUser'])->name('register');
Route::post('/saveuser',[AuthController::class,'store'])->name('save_user');
Route::post('/check_usar',[AuthController::class,'checkUser'])->name('check_usar');
Route::get('/logout',[ArticleController::class,'logout'])->name('logout');
Route::get('/add_articles',[ArticleController::class,'create'])->name('add_articles');

Route::post('/save_article',[ArticleController::class,'store'])->name('save_article');
Route::get('/list_article',[ArticleController::class,'index'])->name('list_article');
Route::get('/show_article/{id}',[ArticleController::class,'show'])->name('show_article');

