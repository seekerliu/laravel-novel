<?php

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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('novel')->group(function(){
        Route::get('/{category?}', 'NovelController@index')
            ->name('novels.index')
            ->where('category', '[A-Za-z]+');
        Route::get('/{novel}', 'NovelController@show')->name('novels.show');
    });

    Route::prefix('author')->group(function(){
        Route::get('/', 'AuthorController@index')->name('authors.index');
        Route::get('/{author}', 'AuthorController@show')->name('authors.show');
    });
});