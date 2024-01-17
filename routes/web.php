<?php

use App\Livewire\Auth\Login;
use App\Livewire\Home;
use App\Livewire\Patients;
use App\Livewire\PatientsNew;
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
Route::get('/pacientes', Patients::class)->name('pacientes');
Route::get('/pacientes/nuevo', PatientsNew::class)->name('pacientes-nuevo');

// Auth
Route::get('/ingreso', Login::class)->name('ingreso');