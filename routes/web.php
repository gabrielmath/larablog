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

Route::group(['prefix' =>'painel'], function(){
    Route::get('/', 'Painel\PainelController@index');
});




Route::get('/home', 'SiteController@index');
Route::get('/post/{id}/update', 'SiteController@update');

Route::get('/roles-permissions', 'SiteController@rolesPermissions');