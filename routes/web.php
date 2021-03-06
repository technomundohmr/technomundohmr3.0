<?php

use Illuminate\Support\Facades\Route;

Route::resource('sliderMain', 'SliderMain');
Route::resource('servicios', 'Servicios');
Route::resource('counter', 'CounterController');
Route::get('/','IndexController@index');