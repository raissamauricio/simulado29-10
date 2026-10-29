<?php

namespace App\Livewire;

use App\Models\Racoes;
use Livewire\Component;

class RacoesCreate extends Component
{

      public $nome;
      public $quantidade;
      public $peso;
      public $preço;
      public $lote;
      public $estoque_minimo;
      public $prazo_validade;

      public function store(){
        Racoes::create([
           'nome' => $this -> nome,
           'quantidade' => $this -> quantidade,
           'peso' => $this -> peso,
           'preço' => $this -> preço,
           'lote' => $this -> lote,
           'estoque_minimo' => $this -> estoque_minimo,
           'prazo_validade' => $this -> prazo_validade,
        ]);

        session()->flash(
            'success',
            'produto cadastrado com sucesso!!'
        );

        session()->flash(
            'error',
            'produto não cadastrado'
        );
      }




    public function render()
    {
        return view('livewire.racoes-create');
    }
}
