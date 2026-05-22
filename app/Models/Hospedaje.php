<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected $fillable = [
        'destino_id',
        'nombre',
        'categoria',
        'precio_noche',
        'habitaciones_disp'
    ];

    public function destino()
    {
        return $this->belongsTo(Destino::class);
    }
}