<?php

use Illuminate\Support\Facades\Route;

//Route::get('/success', function() {
//  return view('success');
//})->name('success');

Route::get('/success', 'MainController@success')->name('success');

Route::get('/', 'MainController@home')->name('home');

Route::post('/check', 'MainController@check');
