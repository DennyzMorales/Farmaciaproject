<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'fecha_ven',
        'marca',
        'id_medicamento',
    ];
}
