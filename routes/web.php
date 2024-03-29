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
    return view('auth.login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
//     return view('dash.index');
// })->name('dash');

Route::get('/dash','App\Http\Controllers\DashboardController@index');

Route::get('dash/crud', function (){
    return view('crud.index');
});
Route::get('dash/crud/create', function (){
    return view('crud.create');
});
// Route::get('/articulo','App\Http\Controllers\ArticuloController@index');
Route::resource('articulos','App\Http\Controllers\ArticuloController');

Route::resource('materias','App\Http\Controllers\MateriaController');

// Route::resource('salones','App\Http\Controllers\SalonController');
Route::resource('salons','App\Http\Controllers\SalonController');

Route::resource('estudiantes','App\Http\Controllers\EstudianteController');

Route::resource('productos','App\Http\Controllers\ProductoController');