<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    use HasFactory;

    protected $table = 'postulacion';
    public $timestamps = false;

    // Campos asignables
    protected $fillable = [
        'id_estudiante',
        'id_oferta',
        'fecha_postulacion',
        'estado',
    ];

    // Relación con el modelo Estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    // Relación con el modelo Oferta
    public function oferta()
    {
        return $this->belongsTo(Oferta::class, 'id_oferta');
    }
}
