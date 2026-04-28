<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Infracciones;
use App\Http\Controllers\Oficiales;
use App\Http\Controllers\TiposInfracciones;
use Illuminate\Support\Facades\Route;

// Route::get('/crear-admin', [AuthController::class, 'crearAdmin'])->name('crear-admin');


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logear', [AuthController::class, 'login'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/home', [Dashboard::class, 'index'])->name('home');

Route::resource('infracciones', Infracciones::class);
Route::resource('oficiales', Oficiales::class);
Route::resource('tipos_infracciones', TiposInfracciones::class);

// Route::prefix('infracciones')->group(function () {
//     Route::get('/', [Infracciones::class, 'index'])->name('infracciones-index');
//     Route::get('/create', [Infracciones::class, 'create'])->name('infracciones-create');
//     Route::post('/store', [Infracciones::class, 'store'])->name('infracciones-store');
//     Route::get('/edit/{id}', [Infracciones::class, 'edit'])->name('infracciones-edit');
//     Route::put('/update/{id}', [Infracciones::class, 'update'])->name('infracciones-update');
//     Route::get('/show/{id}', [Infracciones::class, 'show'])->name('infracciones-show');
//     Route::delete('/destroy/{id}', [Infracciones::class, 'destroy'])->name('infracciones-destroy');


// });
