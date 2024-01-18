<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Doctors;
use App\Livewire\DoctorsEdit;
use App\Livewire\Home;
use App\Livewire\Patients;
use App\Livewire\PatientsEdit;
use App\Livewire\PatientsNew;

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
Route::get('/ingreso', Login::class)->name('ingreso');

// Auth
Route::group(['prefix' => 'pacientes', 'middleware' => 'auth'], function () {
    Route::get('/', Patients::class)->name('pacientes');
    Route::get('/nuevo', PatientsNew::class)->name('pacientes-nuevo');
    Route::get('/editar/{paciente}', PatientsEdit::class)->name('pacientes-editar');
});

Route::group(['prefix' => 'medicos', 'middleware' => 'admin'], function () {
    Route::get('/', Doctors::class)->name('medicos');
    Route::get('/editar/{id}', DoctorsEdit::class)->name('medicos-editar');
});