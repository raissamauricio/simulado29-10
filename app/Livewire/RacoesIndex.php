<?php

namespace App\Livewire;

use App\Models\Racoes;
use Livewire\Component;

class RacoesIndex extends Component
{
    public function render()
    {
        $racoes = Racoes::all();

        return view('livewire.racoes-index', compact('racoes'));

        
    }
}
