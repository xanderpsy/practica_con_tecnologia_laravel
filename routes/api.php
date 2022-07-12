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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::GET('/libros','App\Http\Controllers\LibroController@index'); //muestra todos los registros 
Route::POST('/libros','App\Http\Controllers\LibroController@store'); // crear
Route::PUT('/libros/{id}','App\Http\Controllers\LibroController@update');//actualiza
Route::DELETE('/libros/{id}','App\Http\Controllers\LibroController@destroy'); // elimina
