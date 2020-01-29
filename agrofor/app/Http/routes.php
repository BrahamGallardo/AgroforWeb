<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('welcome');
});
Route::get('/leer', function () {
    return view('leer');
});
Route::get('/detalleFoto1', function () {
    return view('foto1');
});
Route::get('/detalleFoto2', function () {
    return view('foto2');
});
Route::get('/detalleCita', function () {
    return view('vistaCita');
});
Route::post('/sendmail','CorreoController@send')->name('sendmail');
Route::post('agendar','CorreoController@insertar_cita');
