<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ProvinciaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paises', [PaisController::class, 'index']);
Route::get('/pais/{id}/show/', [PaisController::class, 'show']);
Route::get('/distritos/{province_code}', [DistritoController::class, 'index']);
Route::get('/distrito/{id}/show/', [DistritoController::class, 'show']);
Route::get('/municipios/{municipio_id}', [MunicipioController::class, 'index']);
Route::get('/municipio/{id}/show/', [MunicipioController::class, 'show']);
Route::get('/provincias/{country_code}', [ProvinciaController::class, 'index']);
Route::get('/provincia/{id}/show/', [ProvinciaController::class, 'show']);
