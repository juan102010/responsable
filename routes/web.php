<?php

use Illuminate\Support\Facades\Route;



Route::resource('responsables','ResponsablesController');
Route::get('eliminaresponsable/{id}', 'ResponsablesController@destroy');
Route::get('editaresponsable/{id}', 'ResponsablesController@edit');
Route::post('actualizaresponsable', 'ResponsablesController@update');

Route::resource('tickets','TicketsController');
Route::get('eliminartickets/{id}', 'TicketsController@destroy');
Route::get('editarTicket/{id}', 'TicketsController@edit');
Route::post('actualizarTicket', 'TicketsController@update');



