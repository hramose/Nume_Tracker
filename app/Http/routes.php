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
Route::post('contacto','HomeController@sendContactMessage');

// Authentication routes...
Route::get('iniciar-sesion', 'Auth\AuthController@getLogin');
Route::post('iniciar-sesion', 'Auth\AuthController@postLogin');
Route::get('cerrar-sesion', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('registro', 'Auth\AuthController@getRegister');
Route::post('registro', 'Auth\AuthController@postRegister');

//Direccionamiento segun rol

Route::get('perfil','UserController@profile');

// Paciente

Route::group(['middleware' => ['auth','is_patient']],function(){
	Route::get('perfil-paciente','PatientController@showProfile');
	Route::post('perfil-paciente','PatientController@saveProfile');
	Route::get('historia-clinica','PatientController@showHcn');
	Route::post('historia-clinica','PatientController@saveHcn');
	Route::get('agendar-cita','NutritionistController@showDirectory');
	Route::get('nutriologo/{id}','NutritionistController@showFile');
	Route::post('nutriologo/{id}','PatientController@schedule');
	Route::get('historial','PatientController@showHistory');
	Route::post('historial','PatientController@updateReview');
	Route::get('historial/descarga/{id}','PatientController@downloadPlan');
	Route::get('seguimiento','PatientController@showStatistics');
});

//Nutriólogo

Route::group(['middleware' => ['auth','is_nutritionist']],function(){
	Route::get('perfil-nutriologo','NutritionistController@showProfile');
	Route::post('perfil-nutriologo','NutritionistController@saveProfile');
	Route::get('citas','NutritionistController@showSchedule');
	Route::get('citas/{id}','NutritionistController@cancelMeeting');
	Route::post('citas','NutritionistController@updateMeeting');
	Route::get('paciente/{id}','NutritionistController@showHcn');
});

//Administrador

Route::group(['middleware' => ['auth','is_admin']],function(){
	Route::get('admon-usuarios','AdminController@showUsersList');
	Route::post('admon-usuarios','AdminController@deleteUser');
	Route::get('paciente/{id}','AdminController@showPatientProfile');
	Route::post('paciente/{id}','AdminController@updatePatientProfile');
	Route::get('nutriologo-p/{id}','AdminController@showNutritionistProfile');
	Route::post('nutriologo-p/{id}','AdminController@updateNutritionistProfile');
});


/*
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');*/


