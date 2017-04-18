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
    // PainelController
    Route::get('/', 'Painel\PainelController@index');

    // PostController
    Route::get('post', 'Painel\PostController@index');

    // PermissionController
    Route::get('permissions', 'Painel\PermissionController@index');
    Route::get('permission/{id}/roles', 'Painel\PermissionController@roles');

    // RoleController
    Route::get('roles', 'Painel\RoleController@index');
    Route::get('role/{id}/permissions', 'Painel\RoleController@permissions');

    // UserController
    Route::get('users', 'Painel\UserController@index');

});




Route::get('/home', 'Portal\SiteController@index');
Route::get('/post/{id}/update', 'Portal\SiteController@update');

Route::get('/roles-permissions', 'Portal\SiteController@rolesPermissions');