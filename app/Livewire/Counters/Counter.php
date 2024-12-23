<?php

namespace App\Livewire\Counters;

use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Livewire\Attributes\Title;

class Counter extends Component
{

    public $count=0;
    public $limit=5;

    public $tilte_page = 'My Counter page';
    // #[Title('My Counter page')]

    // #[Layout('components.layouts.app')]

    public function render()
    {
        // return view('livewire.counters.counter')->title('My Counter page ');
  
        return view('livewire.counters.counter')->layoutData([
          // 'metaKeys'=>'key1,key2,key3',
          // 'metaDescription'=>'Some description',
          'metaAutor'=>'Vasilyeva Svitlana',
          'title'=>$this->tilte_page
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
