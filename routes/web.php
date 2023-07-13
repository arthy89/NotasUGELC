<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::view('login', 'auth/login')->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// usuarios
Route::get('usuarios', [UserController::class, 'index'])->name('usuarios');
Route::get('usuarios/crear', [UserController::class, 'create'])->name('crear_usuario');
Route::post('usuarios/crear', [UserController::class, 'store'])->name('crear_usuario_g');
Route::get('usuarios/{usuario}/editar', [UserController::class, 'edit'])->name('editar_usuario');
Route::put('usuarios/{usuario}/editar/guardar', [UserController::class, 'update'])->name('editar_usuario_g');
Route::put('usuarios/{usuario}/editar/pass', [UserController::class, 'updatepass'])->name('editar_usuario_pass');
Route::delete('usuarios/{usuario}/eliminar', [UserController::class, 'destroy'])->name('eliminar_usuario');

// estudiantes
Route::get('estudiantes', [EstudiantesController::class, 'index'])->name('estudiantes_index');
Route::get('estudiantes/clase', [EstudiantesController::class, 'clase'])->name('clase_estu');
