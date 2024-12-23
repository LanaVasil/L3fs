<?php

namespace App\Livewire\Brands;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;
// use Livewire\Brands\AllBrands;
use App\Models\Brand;

class CreateBrand extends Component
{

    public $brand;
    public $titleform='Додати';
    public $editform=false;

    #[Rule('required')]
    public $name;
    #[Rule('required')]
    public $status;
    #[Rule('required')]
    public $sort;

    public function save(){
      // dd(123);
      $validated=$this->validate();
      Brand::create($validated);

      $this->dispatch('refresh-list');
      session()->flash('status','Запис додано');
      $this->reset();
    }

    public function close(){
        $this->reset();
    }

    #[On('edit-mode')]
    public function edit($id){
      // dd($id);
      $this->editform=true;
      $this->titleform='Редагувати';
      $this->brand = Brand::findOrFail($id);
      $this->name=$this->brand->name;
      $this->status=$this->brand->status;
      $this->sort=$this->brand->sort;
    }
    
    public function update(){
      // dd(123);
      $validated=$this->validate();
      $id = Brand::findOrFail($this->brand->id);
      $id->update($validated);
      $this->dispatch('refresh-list');
      session()->flash('status',' Зміни збережено');
      // $this->reset();
    }    

    public function render()
    {
        return view('livewire.brands.create-brand');
    }
}
