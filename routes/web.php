<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('alumnos', 'App\Http\Controllers\AlumnoController@index')->name('alumnos');
Route::get('alumnos/{alumno}', 'App\Http\Controllers\AlumnoController@show')->name('alumno');
Route::get('ingreso', 'App\Http\Controllers\AlumnoController@create')->name('ingreso.create');
Route::post('ingreso', 'App\Http\Controllers\AlumnoController@store')->name('ingreso.store');
