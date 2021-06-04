<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CarsController;
use \App\Http\Controllers\DealersController;
use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\AutodealersController;
use \App\Http\Controllers\RepairandmaintenancesController;
use \App\Http\Controllers\WorkordersController;

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

Route::resource('cars', CarsController::class);
Route::resource('dealers', DealersController::class);
Route::resource('users', UsersController::class);
Route::resource('autodealers', AutodealersController::class);
Route::resource('repairandmaintenances', RepairandmaintenancesController::class);
Route::resource('workorders', WorkordersController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
