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

Route::get('/','FilmController@index')->name('film');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/films', 'FilmController@index')->name('film');
Route::get('/film/create', 'FilmController@create')->name('film.create');
Route::post('/film/store', 'FilmController@store')->name('film.store');
Route::get('/film/{id}/edit', 'FilmController@edit')->name('film.edit');
Route::post('/film/update', 'FilmController@update')->name('film.update');
