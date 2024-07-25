<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryControllr;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\AppSettingsController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.login');
});
Route::group(['middleware'=>'auth'], function () {

    Route::get('/new_cate', [CategoryControllr::class, 'create'])->name('addcate');
    Route::get('/list_cate', [CategoryControllr::class, 'index'])->name('all_category');
    Route::post('/save_cate', [CategoryControllr::class, 'store'])->name('save_cate');
    Route::get('/admin/categories/edit/{id}', [CategoryControllr::class, 'edit'])->name('edit_category');
    Route::put('/admin/categories/update/{id}', [CategoryControllr::class, 'update'])->name('update_category');
    Route::delete('/admin/categories/{id}', [CategoryControllr::class, 'destroy'])->name('delete_category');

    Route::get('/new_user',[UserController::class,'create'])->name('add_user')->middleware('role:super_admin');
    Route::get('/list_user',[UserController::class,'index'])->name('list_user')->middleware('role:super_admin');
    Route::post('/save_user',[UserController::class,'store'])->name('save_user')->middleware('role:super_admin');
    Route::get('users/{id}/permissions', [UserController::class, 'managePermissions'])->name('userpermissions')->middleware('role:super_admin');
    Route::post('users/{id}/permissions', [UserController::class, 'updatePermissions'])->name('userpermissionsupdate')->middleware('role:super_admin');
    Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('edit_user');
    Route::get('/profile/de', [UserController::class,'destroy'])->name('de_user');
    Route::post('/profile/update', [UserProfileController::class, 'update'])->name('update_user');
    Route::post('/password/update', [UserProfileController::class, 'updatePassword'])->name('password.update');


    Route::get('/admin/users/edit/{id}', [UserProfileController::class, 'editid'])->name('edit_userID');
    Route::post('/admin/users/update/{id}', [UserProfileController::class, 'update'])->name('update_user');
    Route::delete('/admin/users/{id}', [UserProfileController::class, 'destroy'])->name('de_user');

    Route::get('/admin/articles/edit/{id}', [ArticleController::class, 'edit'])->name('edit_article');
Route::post('/admin/articles/update/{id}', [ArticleController::class, 'update'])->name('update_article');
Route::delete('/admin/articles/{id}', [ArticleController::class, 'destroy'])->name('delete_article');



});

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'CreatUser'])->name('register');
Route::post('/saveuser',[AuthController::class,'store'])->name('save_user_old');
Route::post('/check_usar',[AuthController::class,'checkUser'])->name('check_usar');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/add_articles',[ArticleController::class,'create'])->name('add_articles');

Route::post('/save_article',[ArticleController::class,'store'])->name('save_article');
Route::get('/list_article',[ArticleController::class,'index'])->name('list_article');
Route::get('/show_article/{id}',[ArticleController::class,'show'])->name('show_article');
Route::get('/roles_settings',[AppSettingsController::class,'generateRoles']);
