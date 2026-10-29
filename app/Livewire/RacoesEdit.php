<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RacoesEdit extends Component
{
      public $nome;
      public $quantidade;
      public $peso;
      public $preço;
      public $lote;
      public $estoque_minimo;
      public $prazo_validade;

     public function mount(){
         $this->nome = Auth::user()->nome;
         $this->quantidade = Auth::user()->quantidade;
         $this->peso = Auth::user()->peso;
         $this->preço = Auth::user()->preço;
         $this->lote = Auth::user()->lote;
         $this->estoque_minimo = Auth::user()->estoque_minimo;
         $this->prazo_validade = Auth::user()->prazo_validade;
     }

     
    public function atualizar()
    {
        $dados = $this->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|numeric|min:0',
            'peso' => 'required|numeric|min:0',
            'preco' => 'required|numeric|min:0',
            'lote' => 'required|string|max:255',
            'estoque_minimo' => 'required|numeric|min:0',
            'prazo_validade' => 'required|date',
        ]);

        $this->racao->update($dados);

        session()->flash('sucesso', 'Ração atualizada com sucesso!');

        return redirect()->route('racoes.index');
    }

    public function render()
    {
        return view('livewire.racoes-edit');
    }
}
