<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['numero_pedido', 'fecha', 'id_comprobante'];

    // Definir la relación con el comprobante
    public function comprobante()
    {
        return $this->belongsTo(Comprobante::class, 'id_comprobante');
    }
}
