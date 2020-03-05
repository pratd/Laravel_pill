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

use laravel_project\Http\Controllers\ArticlesController;

Route::view('/', 'home');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::view('contact', 'contact-us');
Route::view('about','about-us');
Route::get('articles', 'ArticlesController@index');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{article}','ArticlesController@show');
Route::get('articles/{article}/edit', 'ArticlesController@edit');
Route::patch('articles/{article}', 'ArticlesController@update');
