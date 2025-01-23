<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', '\App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', '\App\Http\Controllers\LoginController@authenticate')->name('authenticate');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/', 'App\Http\Controllers\CategoryController@index')->name('index')->middleware('auth');
    Route::get('/create', 'App\Http\Controllers\CategoryController@create')->name('createCategory');
    Route::get('/edit/{category}', 'App\Http\Controllers\CategoryController@edit')->name('editCategory');
    Route::get('/show/{category}', 'App\Http\Controllers\CategoryController@show')->name('showCategory');
    Route::post('/create', 'App\Http\Controllers\CategoryController@store')->name('storeCategory');
    Route::post('/edit/{category}', 'App\Http\Controllers\CategoryController@update')->name('updateCategory');
    Route::get('/remove/{category}', 'App\Http\Controllers\CategoryController@destroy')->name('destroyCategory');
});
