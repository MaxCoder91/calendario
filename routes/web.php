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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('login');
})->name('lgn');

Route::get('formfp', function () {
    return view('fpassword');
})->name('fp');

Route::get('formreg', function () {
    return view('registro');
})->name('ru');

Route::get('dashboard', function () {
    return view('plantilla');
})->name('dashboard');

Route::get('VistaCalendario', function () { 
    return view('vcalendario');
})->name('vcalendario');

Route::get('BuscarUsuario', function () {
    return view('pbuscar');
})->name('pbuscar');