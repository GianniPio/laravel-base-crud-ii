<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ComicController@home') -> name('home');

Route::get('/comic/singlecomic/{id}', 'ComicController@comic') -> name('comic');

Route::get('/comic/create', 'ComicController@create') -> name('create');
Route::post('/comic/store', 'ComicController@store') -> name('store');

Route::get('/comic/edit/{id}', 'ComicController@edit') -> name('edit');
Route::post('comic/update/{id}', 'ComicController@update') -> name('update');

Route::get('/comic/delete/{id}', 'ComicController@delete') -> name('delete');
