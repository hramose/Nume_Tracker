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

/* Páginas estáticas */
Route::get('/','HomeController@index');
Route::get('que-es-nume','HomeController@description');
Route::get('nutricion','HomeController@nutrition');
Route::get('blog','HomeController@blog');
Route::get('contacto','HomeController@contact');

/* Registro, autenticación y recuperación de contraseña */

// Authentication routes...
Route::get('iniciar-sesion', 'Auth\AuthController@getLogin');
Route::post('iniciar-sesion', 'Auth\AuthController@postLogin');
Route::get('cerrar-sesion', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('registro', 'Auth\AuthController@getRegister');
Route::post('registro', 'Auth\AuthController@postRegister');

/*
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');*/
