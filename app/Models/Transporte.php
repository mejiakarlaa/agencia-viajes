<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    protected $fillable = [
        'tipo',
        'origen',
        'destino',
        'capacidad',
        'precio',
        'fecha_salida'
    ];

    public function viajes()
    {
        return $this->hasMany(Viaje::class);
    }
}