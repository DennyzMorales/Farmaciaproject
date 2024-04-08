<?php

use Illuminate\Support\Facades\Route;

// Rutas para clientes
Route::get('/clientes', 'ClienteController@index');
Route::post('/clientes', 'ClienteController@store');
Route::get('/clientes/{id}', 'ClienteController@show');
Route::put('/clientes/{id}', 'ClienteController@update');
Route::delete('/clientes/{id}', 'ClienteController@destroy');


// Otras rutas para otras entidades de tu API...
