<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racoes extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'nome',
        'quantidade',
        'peso',
        'preço',
        'lote',
        'descricao',
        'estoque_minimo',
        'prazo_validade',
        
    ];
}
