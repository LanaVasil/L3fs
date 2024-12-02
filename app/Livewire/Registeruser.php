<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attribute\Rule;

class Registeruser extends Component
{
  #[Rule('required')]
  public $name;

  #[Rule('required|unique:users|email')]  
  public $email;

  #[Rule('required|min:4')]  
  public $password;

    public function render()
    {
        return view('livewire.registeruser');
    }

    public function save(){
      dd(123);
    }
}
