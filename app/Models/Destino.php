<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destino extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'pais',
        'descripcion',
        'imagen',
        'precio_base',
        'activo'
    ];

    

    public function hospedajes()
    {
        return $this->hasMany(Hospedaje::class);
    }

    public function viajes()
    {
        return $this->hasMany(Viaje::class);
    }
}
