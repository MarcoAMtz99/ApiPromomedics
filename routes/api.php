<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/* 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */
/* AGENDA */
Route::get('/agenda',"AgendaController@index");
Route::post('/agenda',"AgendaController@store");
/* MEDICOS */
Route::get('/medico',"MedicoController@index");
/* CONSULTORIOS */
Route::get('/consultorio/{id}',"ConsultorioController@show");
