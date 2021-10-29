<?php

use Illuminate\Support\Facades\Route;


/* Route::resource('/registro','RegistroController'); */
Route::resource('/agenda','AgendaController');
Route::resource('/medico','MedicoController');
Route::resource('/consultorio','ConsultorioController');
Route::resource('/paciente','PacienteController');



/* Auth::routes(); */

/* Route::get('/', 'HomeController@index')->name('home');
//Route::get('/excel', 'HomeController@export2')->name('exportExcel');
Route::get('/excel2', 'HomeController@export2')->name('export2');
Auth::routes(['register' => false]); */