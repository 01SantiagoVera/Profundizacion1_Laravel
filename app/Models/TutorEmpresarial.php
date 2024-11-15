<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorEmpresarial extends Model
{

    use HasFactory;


    protected $table = 'tutor_empresarial';


    protected $fillable = [
        'id_empresa',
        'nombres',
        'apellidos',
        'cargo',
        'email',
        'telefono',
    ];

    public function empresa()
{
    return $this->belongsTo(Empresa::class, 'id_empresa');
}

    public $timestamps = false;

}
