<?php

use Illuminate\Support\Facades\Route; // ubacujem samo zbog extesnionos da mi ne crveni route

Route::get('/', function () {
    return view('welcome');
});


Route::get('/movies', 'MoviesController@index');
Route::get('/movies/create', 'MoviesController@create');
Route::post('/movies', 'MoviesController@store');
Route::get('/movies/{id}', 'MoviesController@show');
