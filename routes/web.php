<?php

use App\Http\Controllers\PacientesController;
use App\Livewire\Auth\Login;
use App\Livewire\Home;
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

Route::get('/', Home::class)->name('home');
Route::get('/pacientes', [PacientesController::class, 'view'])->name('pacientes');

// Auth
Route::get('/ingreso', Login::class)->name('ingreso');