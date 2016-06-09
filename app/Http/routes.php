<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('notas', [
  'as'   => 'notas.index',
  'uses' => 'NotasController@index'
]);
Route::post('notas/radio', [
  'as'   => 'notas.radio.store',
  'uses' => 'NotasController@storeRadio'
]);
Route::post('notas/tv', [
  'as'   => 'notas.tv.store',
  'uses' => 'NotasController@storeTv'
]);
Route::get('notas/radio/create', [
  'as'   => 'notas.radio.create',
  'uses' => 'NotasController@createRadio'
]);
Route::get('notas/tv/create', [
  'as'   => 'notas.tv.create',
  'uses' => 'NotasController@createTv'
]);
Route::resource('radios', 'RadiosController');
Route::resource('tvs', 'TvsController');
