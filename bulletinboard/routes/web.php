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

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/post/list', function () {
    return view('posts.list');
});

Route::get('/post/create', function () {
    return view('posts.create');
});

Route::get('/post/create/confirm', function () {
    return view('posts.create-confirm');
});

Route::get('/post/edit', function () {
    return view('posts.edit');
});

Route::get('/post/edit/confirm', function () {
    return view('posts.edit-confirm');
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