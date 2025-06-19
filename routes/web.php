<?php

use App\Http\Controllers\DoctorAppointmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/daftar-bertemu-dokter', [DoctorAppointmentController::class, 'index'])->name('doctor.appointment.index');
    Route::post('/daftar-bertemu-dokter', [DoctorAppointmentController::class, 'store'])->name('doctor.appointment.store');
    Route::get('/riwayat-janji-temu', [DoctorAppointmentController::class, 'history'])->name('doctor.appointment.history');
    
require __DIR__.'/auth.php';
