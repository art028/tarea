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

Route::get('libro/consulta','App\Http\Controllers\controlador@index')->name('libro.consulta');
Route::get('autor/consulta','App\Http\Controllers\controlador@index1')->name('autor.consulta');

Route::get('libro/{id}/actualiza','App\Http\Controllers\controlador@edit')->name('libro.edita');
Route::get('autor/{id}/actualiza','App\Http\Controllers\controlador@edit1')->name('autor.edita');

Route::put('libro/{id}','App\Http\Controllers\controlador@update')->name('libro.actualiza');
Route::put('autor/{id}','App\Http\Controllers\controlador@update1')->name('autor.actualiza');

Route::get('libro/{id}/eliminar','App\Http\Controllers\controlador@show')->name('libro.elimina');
Route::get('autor/{id}/eliminar','App\Http\Controllers\controlador@show1')->name('autor.elimina');

Route::delete('libro/{id}','App\Http\Controllers\controlador@destroy')->name('libro.borrar');
Route::delete('autor/{id}','App\Http\Controllers\controlador@destroy1')->name('autor.borrar');

