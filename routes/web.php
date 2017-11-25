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

Route::get('/', 'StaticPagesController@index')->name('index');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/works', 'WorksPagesController@index')->name('works');
Route::get('/works-item/{id?}', 'WorksPagesController@item')->name('works-item/');
Route::get('/contact', 'ServicePagesController@contact')->name('contact');
Auth::routes();
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  Route::resource('/works', 'WorkController');
});


Route::get('/SiteAdmin', 'SiteAdminController@SiteAdmin')->name('SiteAdmin');
