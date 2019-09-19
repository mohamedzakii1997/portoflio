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

Route::get('/','portiflioController@welcome');
Route::get('/project/{id}/getImage', 'portiflioController@getImage');
Route::get('/downloadcv', 'portiflioController@downloadcv');
Route::post('/contact', 'portiflioController@storecontact');
Auth::routes();
Route::resource('/skills', 'skillcontroller');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/projects', 'projectcontroller');
Route::resource('/profiles', 'profilecontroller');
Route::resource('/messages', 'messagecontroller');
Route::get('/messages/{id}/replay', 'messagecontroller@replay');

Route::get('/messages/read', 'messagecontroller@read');

Route::get('/messages/deleteall', 'messagecontroller@deleteall');

Route::post('/messages/{id}/mail', 'messagecontroller@sendreplay');
Route::resource('/categories', 'categoriescontroller');
Route::get('/projects/{id}/getImage', 'projectcontroller@getImage');
