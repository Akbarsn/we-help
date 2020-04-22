<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/forum', 'PostController@GetAllPosts');

Route::get('/forum/{id}', 'PostController@GetPostByID');

Route::group(['middleware' => 'isAuthenticated'], function () {
    Route::get('/dashboard', 'UserController@GetDashboard');

    Route::post('/post/create', 'PostController@CreatePost');

    Route::post('/post/update/', 'PostController@UpdatePost');

    Route::get('/post/delete/{id}', 'PostController@DeletePost');
});



Route::post('/login', 'AuthController@Login');

Route::post('/register', 'AuthController@Register');
