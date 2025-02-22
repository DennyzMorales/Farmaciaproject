<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_comprobante',
        'cliente_id',
        'precio_neto',
        'iva',
        'precio_total',
    ];
}
