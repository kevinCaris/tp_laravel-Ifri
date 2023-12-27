<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LocationController;
use App\Models\Car;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
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

Route::get('list-locations', function () {
    $locations = Location::with('car')->where('user_id', auth()->user()->id)->paginate(10);
    return view('locations.show', compact('locations'));
})->name('list-locations');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
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
