<?php

use Illuminate\Support\Facades\Route;

Route::resource('sliderMain', 'SliderMain');
Route::resource('servicios', 'Servicios');
Route::resource('counter', 'CounterController');
Route::resource('suscripcion', 'SuscripcionController');
Route::resource('correo', 'Correos');
Route::resource('cotizacionWeb', 'cotizacionWebController');
Route::resource('cms/admin/login', 'loginCMSController');
Route::resource('cms/admin/registro', 'registroCMSController');
Route::resource('afiliado', 'AfiliadoController');
Route::resource('afiliaciones', 'AfiliacionesController');
Route::resource('servicioTecnico', 'ServicioTecnico');
Route::resource('servicioTecnico', 'ServicioTecnico');
Route::resource('pruebaSoftware', 'softwareController');
Route::resource('contacto', 'contactoController');
Route::resource('listaAfiliados', 'ListaAfiliadosController');
Route::get('afiliadoLogin', 'AfiliadoLoginController@login');
Route::post('afiliadoLogin', 'AfiliadoLoginController@loginpost');
Route::post('afiliadoLogout', 'AfiliadoController@logout');
Route::post('afiliadoRegistro', 'registroAfiliadoController@store');
Route::get('afiliadoRegistro', 'registroAfiliadoController@registro');
Route::get('/','IndexController@index')->name('index');
Route::get('/webPage','IndexController@webPage');
Route::get('/software','IndexController@software');
Route::get('/cms/admin','IndexCMSController@index');
Route::post('logout','loginCMSController@logout');
Route::get('felicidades', 'IndexController@felicidades');
