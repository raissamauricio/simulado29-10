<?php

namespace App\Livewire;

use App\Models\Funcionarios;
use Livewire\Component;

class FuncionariosCreate extends Component
{
    public $email;
    public $senha;

    public function store(){
        Funcionarios::create([
            'email' => $this -> email,
            'senha' => $this -> senha,
        ]);
    }
    public function render()
    {
        return view('livewire.funcionarios-create');
    }
}
