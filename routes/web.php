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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myview', 'HomeController@myview');


Route::group(['middleware' => 'monday', 'prefix' => 'good'], function () {
    Route::get('/', 'GoodController@index');
    Route::get('/show/{id}', 'GoodController@show');
    Route::get('/create', 'GoodController@create');
    Route::post('/store', 'GoodController@store');
    Route::get('/edit/{id}', 'GoodController@edit');
    Route::post('/update/{id}', 'GoodController@update');
    Route::get('/destroy/{id}', 'GoodController@destroy');
});

Route::get('/monday', function() {
    return 'Доступ к goods только по понедельнкиам. См. файл AllowIfMonday.php';
});