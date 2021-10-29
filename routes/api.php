<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */
/* AGENDA */
Route::get('/agenda',"AgendaController@index");
Route::post('/agenda',"AgendaController@store");
Route::post('agenda/{id}','AgendaController@update');
/* MEDICOS */
Route::get('/medico',"MedicoController@index");
/* CONSULTORIOS */
Route::get('/consultorio/{id}',"ConsultorioController@show");
/* PACIENTES */
Route::get('/paciente',"PacienteController@index");
