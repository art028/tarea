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
Route::get('1','App\Http\Controllers\cont@registro')->name('reg');
Route::get('2','App\Http\Controllers\cont@autores')->name('form');

Route::post('guarda','App\Http\Controllers\cont@registrar');
Route::post('guardar','App\Http\Controllers\cont@regis');