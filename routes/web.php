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

Route::get('/films', 'FilmController@index')->name('film');
Route::get('/film/{id}', 'FilmController@show');

Route::get('/managefilms', 'ManageFilmController@index')->name('managefilms');
Route::get('/film/create', 'ManageFilmController@create')->name('film.create');
Route::post('/film/store', 'ManageFilmController@store')->name('film.store');
Route::get('/film/{id}/edit', 'ManageFilmController@edit')->name('film.edit');
Route::post('/film/update', 'ManageFilmController@update')->name('film.update');
