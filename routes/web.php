<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InicioController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UsersController;
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

Route::get('home', function () {
    return view('welcome');
});

Route::get('accion1', function () {
    return view('primer_vista');
});

Route::get('acc_servicios', function () {
    return view('servicios');
});

Route::get('acc_nosotros', function () {
    return view('nosotros');
});


Route::get('acc_contacto', function () {
    return view('contacto');
});



Route::get('enviar_correo','App\Http\Controllers\CorreoController@create');
Route::post('enviar_correo','App\Http\Controllers\CorreoController@enviar');


Route::post('enviar_correo','App\Http\Controllers\CorreoController@enviar');


Route::resource('departments',DepartmentsController::class);
Route::resource('jobs',JobsController::class);
Route::resource('users',UsersController::class);