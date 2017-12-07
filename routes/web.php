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
Route::get('/about', 'AboutController@view')->name('about');
Route::get('/jobs', 'StaticPagesController@jobs')->name('jobs');
Route::get('/redevelopment', 'StaticPagesController@redevelopment')->name('redevelopment');
Route::get('/redevelopmenting', 'StaticPagesController@redevelopmenting')->name('redevelopmenting');
Route::get('/affiliated', 'StaticPagesController@affiliated')->name('affiliated');
Route::get('/news', 'NewsPagesController@index')->name('news');
Route::get('/news-item/{id?}', 'NewsPagesController@item')->name('news-item/');
Route::get('/works', 'WorksPagesController@index')->name('works');
Route::get('/works-item/{id?}', 'WorksPagesController@item')->name('works-item/');
Route::get('/workings', 'WorkingsPagesController@index')->name('workings');
Route::get('/workings-item/{id?}', 'WorkingsPagesController@item')->name('workings-item/');
Route::get('/contact', 'ServicePagesController@contact')->name('contact');
Auth::routes();
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  Route::resource('/works', 'WorkController');
  Route::resource('/workings', 'WorkingController');
  Route::resource('/index_info', 'IndexInfoController');
  Route::resource('/news', 'NewsController');
  Route::resource('/about', 'AboutController');
  Route::resource('/indexCover', 'IndexCoverController');
  Route::resource('/working_photos', 'WorkingPhotosController');
  Route::get('/working_photos/{id?}/{count?}', 'WorkingPhotosController@editDesc')->name('working_photos.editDesc');
  Route::post('news_upload_image', 'NewsController@uploadImage')->name('news.upload_image');
  Route::post('about_upload_image', 'AboutController@uploadImage')->name('about.upload_image');

});


Route::get('/SiteAdmin', 'SiteAdminController@SiteAdmin')->name('SiteAdmin');
