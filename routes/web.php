<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/register', function () { return redirect()->route('home'); });

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () { return view('home'); })->name('home');
        
    Route::get('/personal', [PersonalController::class, 'index'])->name('personal.index');
    Route::get('/personal/create', [PersonalController::class, 'create'])->name('personal.create');
    Route::post('/personal', [PersonalController::class, 'store'])->name('personal.store');
    Route::get('/personal/{id}', [PersonalController::class, 'show'])->name('personal.show');
    Route::get('/personal/{id}/edit', [PersonalController::class, 'edit'])->name('personal.edit');
    Route::put('/personal/{id}/update', [PersonalController::class, 'update'])->name('personal.update');
    Route::get('/personal/{id}/destroy', [PersonalController::class, 'destroy'])->name('personal.destroy');

    Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    Route::get('/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/cliente/{id}/update', [ClienteController::class, 'update'])->name('cliente.update');
    Route::get('/cliente/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');

    Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');
    Route::get('/usuario/create', [UserController::class, 'create'])->name('usuario.create');
    Route::post('/usuario', [UserController::class, 'store'])->name('usuario.store');
    Route::get('/usuario/{id}/edit', [UserController::class, 'edit'])->name('usuario.edit');
    Route::put('/usuario/{id}/update', [UserController::class, 'update'])->name('usuario.update');
    Route::get('/usuario/{id}/destroy', [UserController::class, 'destroy'])->name('usuario.destroy');
});
