<?php

namespace App\Livewire\Users;

use Livewire\Component;
// use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
use App\Livewire\Forms\RegisterFrom;

class RegisterUser extends Component
{
  public $tilte_page = 'Register User RegisterFrom';

  public RegisterFrom $form;

  public function save(){
    $this->form->validate();

    // dd(123);
  }


    public function render()
    {
      // <x-title-page-layout-link></x-title-page-layout-link>
        return view('livewire.users.register-user')
          ->layoutData([
              'metaAutor'=>'Vasilyeva Svitlana',
              'title'=>$this->tilte_page
            ])->layout('components.layouts.app');
    }




}

