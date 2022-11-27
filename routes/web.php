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


Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/','App\Http\Controllers\cont@principal')->name('prin');
//Route::get('2','App\Http\Controllers\cont@autores')->name('form');

//Route::post('guarda','App\Http\Controllers\cont@registrar');
//Route::post('guardar','App\Http\Controllers\cont@regis');


Route::get('libro/registrar','App\Http\Controllers\controlador@create')->name('libro.registrar');
Route::get('autor/registrar','App\Http\Controllers\controlador@create1')->name('autor.registrar');

Route::post('libro','App\Http\Controllers\controlador@store')->name('libro.guardar');
Route::post('autor','App\Http\Controllers\controlador@store1')->name('autor.guardar');