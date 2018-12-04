<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', 'IndexController@index');
    Route::get('/admusuario', 'IndexController@admusuario');
    Route::get('/usuarios', 'IndexController@usuarios');
    Route::post('/admusuario', 'IndexController@postusuario');
    Route::post('/delusuario', 'AjaxController@delusuario');
    Route::get('/reservas', 'IndexController@reservas');
    Route::post('/guardareserva', 'AjaxController@guardareserva');
    Route::post('/delreserva', 'AjaxController@delreserva');
