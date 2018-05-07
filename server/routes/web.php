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

//Route::get('/', function (){
//    $items = \App\Video::paginate();
//    return 'a';
//    $novel = new App\Novel;
//
//    $novel->test = 'test';
//
//    $novels = App\Novel::where(
//        [
//            ['name', '!=', 'quia'],
//            ['category_id', 4],
//        ]
//    )->orWhere('author_id', 2)->get();
//
//    return view('welcome')->with(compact('novels'));
//});
Route::get('/', function(){
    return redirect(route('home'));
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('home', 'HomeController@index')->name('home');

    Route::prefix('novels')->group(function(){
        Route::get('{category?}', 'NovelController@index')
            ->where('category', '[A-Za-z]+')
            ->name('novels.index');
        Route::get('{novel}', 'NovelController@show')->name('novels.show');
    });

    Route::prefix('authors')->group(function(){
        Route::get('', 'AuthorController@index')->name('authors.index');
        Route::get('{author}', 'AuthorController@show')->name('authors.show');
    });

    Route::prefix('articles')->group(function(){
        Route::get('{article}', 'ArticleController@show')->name('articles.show');
    });

    Route::prefix('videos')->group(function(){
        Route::get('', 'VideoController@index')->name('videos.index');
        Route::get('{video}', 'VideoController@show')->name('videos.show');
    });
});