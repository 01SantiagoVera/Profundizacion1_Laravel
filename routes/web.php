<?php


use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\TutorAcademicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\TutorEmpresarialController;
use App\Http\Controllers\DashboardController;
use \App\Http\Controllers\OfertaController;

// routes/web.php

// Rutas para el administrador
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('Empresa', EmpresaController::class);
    Route::resource('Estudiante', EstudianteController::class);
    Route::resource('TutorAcademico', TutorAcademicoController::class);
    Route::resource('TutorEmpresarial', TutorEmpresarialController::class);
    Route::resource('Oferta', OfertaController::class);
    Route::resource('Postulacion', PostulacionController::class);

    // Ruta para listar ofertas del administrador
    Route::get('ofertas', [OfertaController::class, 'listarOfertas'])
        ->defaults('vista', 'oferta.table')
        ->name('Oferta.listarOfertas');

    Route::get('ofertas/{id}', [OfertaController::class, 'show'])
        ->name('admin.ofertas.show');

});

// Rutas para el estudiante
Route::group(['prefix' => 'user'], function () {
    Route::get('ofertas', [OfertaController::class, 'listarOfertas'])
        ->defaults('vista', 'Estudiante.Oferta')
        ->name('estudiante.ofertas');

    Route::get('ofertas/{id}', [OfertaController::class, 'show'])
        ->defaults('vista', 'Estudiante.ver')
        ->name('estudiante.ofertas.show');

    Route::post('postularse/{id_oferta}', [PostulacionController::class, 'postularse'])
        ->name('user.postulaciones.postularse');

});



