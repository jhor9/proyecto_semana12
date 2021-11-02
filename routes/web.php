<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('citaDestalles', 'Cita_destalleController');


Route::resource('citas', 'CitasController');


Route::resource('doctors', 'DoctorController');


Route::resource('pacientes', 'PacienteController');


Route::resource('usuarios', 'UsuarioController');


Route::get('/tareas', 'VueController@lista');
Route::put('/tareas/actualizar', 'VueController@update');
Route::post('/tareas/guardar', 'VueController@store');
Route::delete('/tareas/borrar/{iddoctor}', 'VueController@destroy');
Route::get('/tareas/buscar', 'VueController@show');

Route::resource('vuedoctor', 'VueController');

