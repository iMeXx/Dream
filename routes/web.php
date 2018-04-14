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
Route::get('/', ['uses'=>'IndexController@index', 'as'=>'home']);
Route::get('/auth', ['uses'=>'IndexController@index', 'as'=>'home']);

Route::prefix('pca')->group(function () {
    Route::get('/', ['uses'=>'PCAController@index', 'as'=>'pca']);
    Route::get('/games', ['uses'=>'GameController@index', 'as'=>'games']);
});


