<?php

use App\Http\Controllers\Admin\CategoryControllr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new_cate',[CategoryControllr::class, 'create'])->name('addcate');
Route::get('/list_cate',[CategoryControllr::class, 'index'])->name('all_category');
Route::post('/save_cate',[CategoryControllr::class,'store']);
