<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('_layouts.default');
// });

Route::get('/', 'HomeController@index');

Route::get('/games', 'GamesController@index');
Route::get('/girls', 'GirlsController@index');
Route::get('/movies', 'MoviesController@index');
Route::get('/sports', 'SportsController@index');
Route::get('/search', 'SearchController@index');
Route::get('/games-dir', 'GamesDirController@index');
