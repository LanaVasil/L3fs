<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{
    // public $users;
    public $name='Awesome Name Vanikovich';
    // public function mount(){
    //   $this->users=User::all();
    // }

    // public function render()
    // {
    //     return view('livewire.users.create-user')->with(['email'=>'hjkh@j.com']);
    // }

    // 2 варіант
    public function render()
    {
        return view('livewire.users.create-user',[
          'name'=>'Перелік користувачів пошти',
          'email'=>'ukr@gmail.com', 'users'=>User::all()
        ]);
    }
}
