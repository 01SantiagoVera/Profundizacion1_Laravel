<?php


use App\Http\Controllers\TutorAcademicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\TutorEmpresarialController;
use App\Http\Controllers\DashboardController;
use \App\Http\Controllers\OfertaController;

// routes/web.php
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


Route::resource('Empresa', EmpresaController::class);
Route::resource('Estudiante', EstudianteController::class);
Route::resource('TutorAcademico', TutorAcademicoController::class );
Route::resource('TutorEmpresarial', TutorEmpresarialController::class);
Route::resource('Oferta', OfertaController::class);
