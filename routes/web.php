<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ComicController@home') -> name('home');

Route::get('/comic/singlecomic/{id}', 'ComicController@comic') -> name('comic');
