<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [UserLoginController::class, 'index'])->name('login');
Route::post('/user/login', [UserLoginController::class, 'login'])->name('user.login');
Route::get('/logout', [UserLoginController::class, 'logout'])->name('user.logout');

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/confirm', [PostController::class, 'confirm'])->name('post.confirm');

Route::get('/post/edit', function () {
    return view('posts.edit');
});

Route::get('/post/edit/confirm', function () {
    return view('posts.edit-confirm');
});

Route::get('/post/uploadCSV', function () {
    return view('posts.upload-csv');
});

Route::get('/user/list', function () {
    return view('users.list');
});

Route::get('/user/register', function () {
    return view('users.register');
});

Route::get('/user/register/confirm', function () {
    return view('users.register-confirm');
});

Route::get('/user/show', function () {
    return view('users.show');
});

Route::get('/user/edit', function () {
    return view('users.edit');
});

Route::get('/user/changePwd', function () {
    return view('users.change-password');
});

Route::get('/user/resetPwd', function () {
    return view('users.reset-password');
});

Route::get('/user/signup', function () {
    return view('users.signup');
});
