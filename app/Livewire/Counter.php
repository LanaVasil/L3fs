<?php

namespace App\Livewire;

use Livewire\Component;
// use Livewire\Attributes\Title;
// use Livewire\Attributes\Layout;

class Counter extends Component
{
    public $count=0;
    public $limit=5;

    // #[Title('Моя сторинка з лічильноком')]
    // #[Layout('components.layouts.app ')]

    public function render()
    {
        return view('livewire.counter')->layoutData([
          'metaKeys'=>'key1,key2,key3',
          'metaDescription'=>'Some description',
          'metaAutor'=>'Mr. james somebody',
          'title'=>'My very awesome title'
        ])->layout('components.layouts.app');
    }

    public function increment(){
      if($this->count<$this->limit){
        $this->count++;  
      }else{
        session()->flash('status', 'The count is to high');
      }
      
    }

    public function decrement(){
      if($this->count>0){
        $this->count--;
      }else{
        session()->flash('status', 'The count is to low');
      }
    }
}
