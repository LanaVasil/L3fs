<?php

namespace App\Livewire;

use Livewire\Component;
// use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
class Registeruser extends Component
{
  // #[Rule('required')]
  public $name;

  // #[Rule('required|unique:users|email')]  
  public $email;

  // #[Rule('required|min:4')]  
  public $password;

    public function render()
    {
        return view('livewire.registeruser');
    }
    /*
    public function rules(){
      return[
         'name'=>'required',
         'email'=>'required|unique:users|email',
         'password'=>'required|min:5'  
      ];
    }
    */
    public function save(){
      // $this->validate();
      /*$validated=$this->validate([
         'name'=>'required',
         'email'=>'required|unique:users|email',
         'password'=>'required|min:5',  
      ]);*/
      $validated=Validator::make(
        [
          'name'=>$this->name,
          'email'=>$this->email,
          'password'=>$this->password  
        ],
        [
          'name'=>'required',
          'email'=>'required|unique:users|email',
          'password'=>'required|min:5'  
        ],
        ['required'=>'Поле :attribute обов`язкове']
      )->validated();
      dd(123);
    }
}
