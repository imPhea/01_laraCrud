<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return ('add end point with /index to see app.');
});

// only success login can access this route = middleware
Route::middleware('auth')->group(function (){
    Route::get('/dashboard', 'App\Http\Controllers\ArticleController@Index');
});

// article
Route::get('/delete/{id}', 'App\Http\Controllers\ArticleController@Delete');
Route::prefix('/create')->group(function (){
    Route::get('', 'App\Http\Controllers\ArticleController@Create');
    Route::post('/submit', 'App\Http\Controllers\ArticleController@Store');
});
Route::prefix('/update')->group(function (){
    Route::get('/{id}', 'App\Http\Controllers\ArticleController@Update');
    Route::post('/submit', 'App\Http\Controllers\ArticleController@UpdateSubmit');
});

// User register
Route::prefix('/register')->group(function (){
    Route::get('/', 'App\Http\Controllers\UserController@Index');
    Route::post('/submit', 'App\Http\Controllers\UserController@Create');
});
// User login
Route::prefix('/login')->group(function (){
    Route::get('/', 'App\Http\Controllers\UserController@Login');
    Route::post('/submit', 'App\Http\Controllers\UserController@LoginSubmit');
});


