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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/alumnos', 'AlumnoController@index')->name('alumnos.index'); 
Route::get('/alumnos/create','AlumnoController@create')->name('alumnos.create');
Route::post('/alumnos','AlumnoController@store')->name('alumnos.store');
Route::get('/alumnos/{alumno}','AlumnoController@show')->name('alumnos.show');
Route::delete('/alumnos/{alumno}','AlumnoController@destroy')->name('alumnos.destroy');
Route::get('/alumnos/{alumno}/edit','AlumnoController@edit')->name('alumnos.edit');
Route::put('/alumnos//{alumno}','AlumnoController@update')->name('alumnos.update');

Route::get('/carreras', 'CarreraController@index')->name('carreras.index'); 
Route::get('/carreras/create','CarreraController@create')->name('carreras.create');
Route::post('/carreras','CarreraController@store')->name('carreras.store');
Route::delete('/carreras/{carrera}','CarreraController@destroy')->name('carreras.destroy');
Route::get('/carreras/{carrera}/edit','CarreraController@edit')->name('carreras.edit');
Route::put('/carreras/{carrera}','CarreraController@update')->name('carreras.update');

Route::get('/universidades', 'UniversidadController@index')->name('universidades.index'); 
Route::get('/universidades/create','UniversidadController@create')->name('universidades.create');
Route::post('/universidades','UniversidadController@store')->name('universidades.store');
Route::delete('/universidades/{universidad}','UniversidadController@destroy')->name('universidades.destroy');
Route::get('/universidades/{universidad}/edit','UniversidadController@edit')->name('universidades.edit');
Route::put('/universidades/{universidad}','UniversidadController@update')->name('universidades.update');
