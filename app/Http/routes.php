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

Route::get('/', [
    'as' => '/',
    'uses' => 'HomeController@index'
]);

Route::get('que-es-nume', [
    'as' => 'que-es-nume',
    'uses' => 'HomeController@description'
]);

Route::get('nutricion', [
    'as' => 'nutricion',
    'uses' => 'HomeController@nutrition'
]);

Route::get('contacto', [
    'as' => 'contacto',
    'uses' => 'HomeController@contact'
]);

Route::get('blog', [
    'as' => 'blog',
    'uses' => 'HomeController@blog'
]);
