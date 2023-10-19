<?php

use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RecovercontraController;

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('registro', [LoginController::class, 'registro_view'])->name('registro')->middleware('guest');
Route::post('registro', [LoginController::class, 'registro'])->middleware('guest');

Route::view('login', 'auth/login')->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// EDIT USER
Route::get('perfil', [PerfilController::class, 'perfil'])->name('perfil');
Route::post('perfil/act', [PerfilController::class, 'perfil_act'])->name('perfil_act');
Route::post('perfil/contra', [PerfilController::class, 'perfil_contra'])->name('perfil_contra');

// RECOVER CONTRA
Route::get('olvide-mi-contrasena', [RecovercontraController::class, 'formulario'])->name('form-olvide');
Route::post('enviarcorreo', [RecovercontraController::class, 'enviarcorreo'])->name('enviarcorreo');
Route::get('reestablecercontra/{token}', [RecovercontraController::class, 'formress'])->name('formress');
Route::post('reestablecido', [RecovercontraController::class, 'reset'])->name('resetcontra');

Route::group(['middleware' => ['auth', 'checkRole:Admin']], function () {
    //RUTAS PARA LOS ADMINISTRADORES Auth::user()->rol == 'Admin' de la BD
    // usuarios
    Route::get('usuarios', [UserController::class, 'index'])->name('usuarios');
    Route::get('usuarios/crear', [UserController::class, 'create'])->name('crear_usuario');
    Route::post('usuarios/crear', [UserController::class, 'store'])->name('crear_usuario_g');
    Route::get('usuarios/{usuario}/editar', [UserController::class, 'edit'])->name('editar_usuario');
    Route::put('usuarios/{usuario}/editar/guardar', [UserController::class, 'update'])->name('editar_usuario_g');
    Route::put('usuarios/{usuario}/editar/pass', [UserController::class, 'updatepass'])->name('editar_usuario_pass');
    Route::delete('usuarios/{usuario}/eliminar', [UserController::class, 'destroy'])->name('eliminar_usuario');
});


// estudiantes
Route::get('estudiantes', [EstudiantesController::class, 'index'])->name('estudiantes_index');
Route::get('estudiantes/{estudiante}/editar', [EstudiantesController::class, 'edit'])->name('estudiantes_editar');
Route::put('estudiantes/{estudiante}/actualizar', [EstudiantesController::class, 'update'])->name('estudiantes_actualizar');

// notas
Route::get('notas', [NotasController::class, 'index'])->name('notas_index');
Route::get('estadisticas', [NotasController::class, 'estadisticas'])->name('estadisticas_index');
// imprimir
Route::get('estadisticas/imprimir/{grado}/{curso}', [NotasController::class, 'imprimir_notas'])->name('imprimir_notas');
Route::get('notas/{curso}', [NotasController::class, 'grados'])->name('grados_index');
Route::get('notas/{curso}/{grado}', [NotasController::class, 'seccion'])->name('seccion_index');

// DIRECTOR
Route::get('docentes', [DirectorController::class, 'docentes'])->name('docentes')->middleware('auth');;
Route::get('docentes/registro/{token}', [DirectorController::class, 'docentes_registro'])->name('docentes_registro');
Route::post('docentes/registro/{token}/new', [DirectorController::class, 'docentes_registro_store'])->name('docentes_registro_store');

// correo
// Route::view('correoxd', 'Mails/invitaciondocente');
