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
    return view('auth.login');
});

Route::auth();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('user.logout');


/**
 * Users and Roles
 */
Route::post('roles', 'UserController@storeRole')->name('user.roles.store');
Route::put('roles', 'UserController@updateRole')->name('user.roles.update');

Route::get('/roles/abilities', 'UserController@getAbilitiesById')->name('user.roles.abilities');

Route::get('/roles/{id?}', 'UserController@getRoles')->name('user.roles.list');
Route::get('/admin/users', 'UserController@index')->name('admin.users');
Route::get('/admin/users/new', 'UserController@create')->name('admin.users.create');
Route::post('/admin/users', 'UserController@save')->name('admin.users.save');

