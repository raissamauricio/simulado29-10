<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_movimentacao',
        'produto',
        'lote',
        'tipo',
        'quantidade',
        'funcionario_responsavel'
    ];
}
