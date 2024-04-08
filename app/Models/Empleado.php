<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'puesto',
        'codigo_farmacia',
    ];

    /**
     * Obtener la farmacia a la que pertenece este empleado.
     */
    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class, 'codigo_farmacia');
    }
}
