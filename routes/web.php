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


Route::get('/', 'RecipeController@index');

Route::get('/about', 'RecipeController@about');

Route::get('/create', 'RecipeController@create');

Route::get('/contact', 'RecipeController@contact');

Route::get('/home', 'RecipeController@home');

Route::resource('/recipes','RecipeController' );



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

