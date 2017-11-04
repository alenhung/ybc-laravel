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
Route::get('/works-item', 'WorksPagesController@item')->name('works-item');
Route::get('/contact', 'ServicePagesController@contact')->name('contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
