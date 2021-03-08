<?php

use Illuminate\Support\Facades\Route;

Route::resource('sliderMain', 'SliderMain');
Route::resource('servicios', 'Servicios');
Route::resource('counter', 'CounterController');
Route::resource('suscripcion', 'SuscripcionController');
Route::resource('correo', 'Correos');
Route::resource('cotizacionWeb', 'cotizacionWebController');
Route::get('/','IndexController@index');
Route::get('/webPage','IndexController@webPage');
Route::get('/cms/admin','IndexCMSController@index');