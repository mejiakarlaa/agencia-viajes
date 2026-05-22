<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $fillable = [
        'user_id',
        'viaje_id',
        'folio',
        'estado',
        'monto_pagado'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }
}
