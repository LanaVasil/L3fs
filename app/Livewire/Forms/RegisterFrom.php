<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class RegisterFrom extends Form
{
  #[Rule('required')]
  public $name;

  #[Rule('required|email')]  
  public $email;

  #[Rule('required|min:4')]  
  public $password;
}
