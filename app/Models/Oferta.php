<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $table = 'oferta';


    public $timestamps = false;


    protected $fillable = [
        'id_Empresa',
        'titulo',
        'descripcion',
        'requisitos',
        'duracion',
        'remuneracion',
        'fecha_inicio',
        'fecha_fin',
        'habilidades'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_Empresa');
    }

}

