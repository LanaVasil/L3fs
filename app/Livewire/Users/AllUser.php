<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AllUser extends Component
{
  public $titlePage = 'All Users -search';

  use WithPagination;
  public $q;
  public $pagination=10;

  public function updatedQ()
  {
    $this->resetPage();
  }

    public function render()
    {
      if(!$this->q){
        $users=User::paginate($this->pagination);
      }else{
        $users=User::where('name','like','%'.$this->q.'%')
                    ->orWhere('email','like','%'.$this->q.'%')
                    ->simplePaginate($this->pagination);
      }

      return view('livewire.users.all-user',[
          'users'=>$users,])    
          // 'users'=>User::paginate(2),])
          ->layoutData([
              'metaAutor'=>'Vasilyeva Svitlana',
              'titlePage'=>$this->titlePage
            ])->layout('components.layouts.app');
    }

}
