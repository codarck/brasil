<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register-1', function () { return view('register'); })->name('register1');
Route::get('/register-2', function () { return view('register'); })->name('register2');
Route::get('/register-3', function () { return view('register'); })->name('register3');
Route::get('/register-4', function () { return view('register'); })->name('register4');
Route::get('/register-5', function () { return view('register'); })->name('register5');
Route::get('/register-6', function () { return view('register'); })->name('register6');

Route::get('/register-service', function () { return view('register-service'); })->name('register-service');
Route::get('/main', function () { return view('main'); })->name('main');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/chat', function () {
        return view('chat');
    })->name('chat');
    Route::get('/solicitudes', function () {
        return view('solicitudes');
    })->name('solicitudes');
    Route::get('/documentos', function () {
        return view('documentos');
    })->name('documentos');
    Route::get('/favoritos', function () {
        return view('favoritos');
    })->name('favoritos');
    Route::get('/estagio', function () {
        return view('estagio');
    })->name('estagio');
});


require __DIR__.'/auth.php';
