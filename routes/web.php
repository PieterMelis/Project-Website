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
Route::get('article/add', 'ArticlesController@create');
Route::get('article/{id}', 'ArticlesController@show');
Route::get('articleGate/{id}', 'ArticlesController@showGate');
Route::get('approve/{id}', 'ArticlesController@approveView');
Route::post('approve/{id}', 'ArticlesController@approve');
Route::post('unapprove/{id}', 'ArticlesController@unapprove');
Route::get('gateArticles', 'ArticlesController@gateArticles');




Route::get('article/delete/{id}', 'ArticlesController@delete');
Route::get('news', 'ArticlesController@News');
Route::get('video', 'ArticlesController@Videos');
Route::get('video/{id}', 'ArticlesController@showVideo');

Route::get('/', 'ArticlesController@Index');
Route::get('yourarticles', 'ArticlesController@userarticles');
Route::get('users', 'ArticlesController@users');
Route::get('user/{id}', 'ArticlesController@editUser');
Route::post('user/{id}', 'ArticlesController@changeUser');
Route::get('article/edit/{id}', 'ArticlesController@editView');
Route::post('article/edit/{id}', 'ArticlesController@edit');



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('article/add', 'ArticlesController@store');

Route::get('/info', function () {
    return view('info') ;
});

Route::get('/map', function () {
    return view('map') ;
});
Route::get('/spel', function () {
    return view('game') ;
});
