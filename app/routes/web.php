<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PastEventsController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\EntraineurController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ReservationController;
use App\Models\Entraineur;

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

// Auth routes
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('/', [AuthController::class, 'Login'])->name('login');

Route::middleware('auth')->group(function () {
    // Dashboard route
    Route::get('/past-events', [PastEventsController::class, 'index'])->name('dashboard');

    // Membre Resource Routes
    Route::get('/membres', [MembreController::class, 'index'])->name('membres.index');
    Route::post('/membres/filter', [MembreController::class, 'index'])->name('membres.filter');
    Route::get('/membres/create', [MembreController::class, 'create'])->name('membres.create');
    Route::post('/membres', [MembreController::class, 'store'])->name('membres.store');
    Route::get('/membres/{membre}/edit', [MembreController::class, 'edit'])->name('membres.edit');
    Route::put('/membres/{membre}', [MembreController::class, 'update'])->name('membres.update');
    Route::get('/membres/{membre}', [MembreController::class, 'destroy'])->name('membres.destroy');

    // Entraineur Resource Routes
    Route::get('/entraineurs', [EntraineurController::class, 'index'])->name('entraineurs.index');
    Route::get('/entraineurs/create', [EntraineurController::class, 'create'])->name('entraineurs.create');
    Route::post('/entraineurs', [EntraineurController::class, 'store'])->name('entraineurs.store');
    Route::get('/entraineurs/{entraineur}/edit', [EntraineurController::class, 'edit'])->name('entraineurs.edit');
    Route::put('/entraineurs/{entraineur}', [EntraineurController::class, 'update'])->name('entraineurs.update');
    Route::get('/entraineurs/{entraineur}', [EntraineurController::class, 'destroy'])->name('entraineurs.destroy');

    // Activite Resource Routes
    Route::get('/activites', [ActiviteController::class, 'index'])->name('activites.index');
    Route::get('/activites/create', [ActiviteController::class, 'create'])->name('activites.create');
    Route::post('/activites', [ActiviteController::class, 'store'])->name('activites.store');
    Route::get('/activites/{activite}/edit', [ActiviteController::class, 'edit'])->name('activites.edit');
    Route::put('/activites/{activite}', [ActiviteController::class, 'update'])->name('activites.update');
    Route::get('/activites/{activite}', [ActiviteController::class, 'destroy'])->name('activites.destroy');

    // Inscription Resource Routes
    Route::get('/inscriptions', [InscriptionController::class, 'index'])->name('inscriptions.index');
    Route::get('/inscriptions/create', [InscriptionController::class, 'create'])->name('inscriptions.create');
    Route::post('/inscriptions', [InscriptionController::class, 'store'])->name('inscriptions.store');
    Route::get('/inscriptions/{inscription}/edit', [InscriptionController::class, 'edit'])->name('inscriptions.edit');
    Route::put('/inscriptions/{inscription}', [InscriptionController::class, 'update'])->name('inscriptions.update');
    Route::get('/inscriptions/{inscription}', [InscriptionController::class, 'destroy'])->name('inscriptions.destroy');

    // Reservation Resource Routes
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
    Route::get('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
});
