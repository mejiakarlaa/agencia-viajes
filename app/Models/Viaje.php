<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $fillable = [
        'destino_id',
        'hospedaje_id',
        'transporte_id',
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'precio_total',
        'capacidad',
        'itinerario'
    ];

    public function destino()
    {
        return $this->belongsTo(Destino::class);
    }

    public function hospedaje()
    {
        return $this->belongsTo(Hospedaje::class);
    }

    public function transporte()
    {
        return $this->belongsTo(Transporte::class);
    }

    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class);
    }
}
