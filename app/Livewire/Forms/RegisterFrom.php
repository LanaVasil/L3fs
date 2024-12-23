<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Rule;
use App\Livewire\Users\RegisterUser;

class RegisterFrom extends Form
{
  #[Rule('required|min:2')]
  public $name;

  #[Rule('required|email')]  
  public $email;

  #[Rule('required|min:4')]  
  public $password;
}
