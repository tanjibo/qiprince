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



Auth::routes();
Route::group(['namespace'=>'front'],function(){
    Route::get('/', 'ArticleController@lists');
    Route::get('article/{aid}','ArticleController@detail')->name('detail');
    Route::get('addArticle','ArticleController@addArticle')->name('add');
    Route::post('create','ArticleController@create')->name('create');
});
