<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LocationController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('cars', CarController::class);
Route::resource('location', LocationController::class);

Route::get('location-create/{id}', function ($id) {
    $car = Car::find($id);
    return view('locations.create', ['car' => $car]);
})->name('louer');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
