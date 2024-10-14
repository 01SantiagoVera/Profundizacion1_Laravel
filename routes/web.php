<?php


use App\Http\Controllers\TutorAcademicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\TutorEmpresarialController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('empresa', EmpresaController::class);
Route::resource('Estudiante', EstudianteController::class);
Route::resource('TutorAcademico', TutorAcademicoController::class );
Route::resource('TutorEmpresarial', TutorEmpresarialController::class);
