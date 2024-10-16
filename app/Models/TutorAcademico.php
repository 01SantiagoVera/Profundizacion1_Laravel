<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorAcademico extends Model
{
    use HasFactory;

    // El nombre de la tabla en la base de datos (especifica si es diferente a 'tutor_empresarial')
    protected $table = 'tutor_academico';

    // Los atributos que son asignables en masa
    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'programa',
        'email',
        'telefono',
    ];

    // Opcionalmente, si la tabla tiene timestamps, puedes desactivarlos si no los usas
    public $timestamps = false;
}
