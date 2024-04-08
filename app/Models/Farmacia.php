<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
    ];

    /**
     * Obtener los empleados de esta farmacia.
     */
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'codigo_farmacia');
    }
}
