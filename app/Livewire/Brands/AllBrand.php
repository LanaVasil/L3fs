<?php

namespace App\Livewire\Brands;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Brand;

class AllBrand extends Component
{
    public $titlePage = 'All Бренди - модал вікно';

    public $brands;
    public function mount(){
        $this->brands=Brand::all();
    }

    #[On('refresh-list')]
    public function refreshList(){
        $this->brands=Brand::all();
    }

    public function render()
    {
        // dd($this->titlePage);
        return view('livewire.brands.all-brand')
        ->layoutData([
          'metaAutor'=>'Vasilyeva Svitlana',
          'titlePage'=>$this->titlePage
        ])->layout('components.layouts.app');
    }
}
