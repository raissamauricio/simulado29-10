<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'quantidade',
        'preço',
        'lote',
        'estoque_minimo',
        'prazo_validade'
    ];
}
