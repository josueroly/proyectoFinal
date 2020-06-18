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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('recuperar', 'RecuperarController');
Route::get('recuperarPaciente', 'RecuperarController@pacientes')->name('recuperarPaciente');
Route::delete('restPaciente/{id}', 'RecuperarController@restPaciente')->name('restPaciente');
Route::get('recuperarPersonal', 'RecuperarController@medicos')->name('recuperarPersonal');
Route::delete('restMedico/{id}','RecuperarController@restMedico')->name('restMedico');


Route::resource('especialidad', 'EspecialidadesController' );
Route::resource('especialidades', 'EspecialidadsController');
Route::resource('pacientes', 'PacientesController');
Route::resource('medicos','Personal_medicosController');


Route::patch('eliEsp/{id}', 'EspecialidadesController@logicDelete')->name('eliEsp');


Route::get('pacientes_pdf/{id}','PacientesController@pdf')->name('pacientes_pdf');


//reportes
//Route::get('pdf','ReportController@generar');
