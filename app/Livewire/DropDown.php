<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UnitType;
use App\Models\Unit;


class DropDown extends Component
{
  public $unitypes;
  public $selectedunitype=null;
  public $units;  
    public function mount(){
      $this->unitypes=UnitType::all();
    }

    public function render()
    {
        return view('livewire.drop-down');
    }

    public function updatedSelectedunitype(){
      // dd($this->selectedunitype);
      $this->units=Unit::where('unit_type_id', $this->selectedunitype)->get();
    }
   
}
