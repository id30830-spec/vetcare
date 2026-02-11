<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Public pages
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Services (PUBLIC)
Route::get('/services', [ServiceController::class, 'index'])
    ->name('services.index');

/*
|--------------------------------------------------------------------------
| Authenticated pages
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    // Appointments
    Route::resource('appointments', AppointmentController::class);

    /*
    |--------------------------------------------------------------------------
    | Services (ADMIN ONLY)
    |--------------------------------------------------------------------------
    */

    // IMPORTANT: Specific routes FIRST

    Route::get('/services/create', [ServiceController::class, 'create'])
        ->name('services.create');

    Route::post('/services', [ServiceController::class, 'store'])
        ->name('services.store');

    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])
        ->name('services.edit');

    Route::put('/services/{service}', [ServiceController::class, 'update'])
        ->name('services.update');

    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])
        ->name('services.destroy');
});

/*
|--------------------------------------------------------------------------
| Service Show Route (MUST BE LAST)
|--------------------------------------------------------------------------
*/

Route::get('/services/{service}', [ServiceController::class, 'show'])
    ->name('services.show');

require __DIR__ . '/auth.php';
