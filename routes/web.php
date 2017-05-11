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
Route::get('article/delete/{id}', 'ArticlesController@delete');
Route::get('news', 'ArticlesController@News');
Route::get('/', 'ArticlesController@Index');
Route::get('yourarticles', 'ArticlesController@userarticles');
Route::get('users', 'ArticlesController@users');
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
