<?php

namespace App\Livewire\Devices;

use Livewire\Component;
use App\Models\Device;
use App\Models\DevType;
use App\Models\Brand;

class EditDevice extends Component
{
    public $titlePage = 'Редагувати. Довідник пристроїв';

    public $row_id;
    public Device $rows;

    public $dev_type_id = '';
    public $brand_id = '';
    public $name = '';
    public $note = '';
    public $status = 1;
    public $statusList = [
        '1'=>'актуальні',
        '0'=>'неактуальні',
        '9'=>'не заправляються',
    ];
    public function mount($id){

      // // here i forgot to assign the $id to our public car_id
      $this->row_id = $id;

      $this->rows = Device::where('id', $id)->first();

      $this->dev_type_id = $this->rows->dev_type_id;
      $this->brand_id = $this->rows->brand_id;
      $this->name = $this->rows->name;
      $this->note = $this->rows->note;
      $this->status = $this->rows->status;

    }

    public function updateRow(){
      $this->validate([
          'dev_type_id' => 'required',
          'brand_id' => 'required',
          'name' => ['required', 'string', 'min:3', 'max:255'],
          'note' => 'nullable',
          'status' => 'nullable',
      ]);

      try {
        Device::where('id',$this->row_id)->update([
          'dev_type_id' => $this->dev_type_id,
          'brand_id' => $this->brand_id,
          'name' => $this->name,
          'note' => $this->note,
          'status' => $this->status,
      ]);

        session()->flash('success', 'Зміни збережено.');

        return $this->redirect('/devices', navigate:true);

      } catch (\Exception $e) {
        dd($e) ;
      }
    }

    public function render()
    {
        return view('livewire.devices.edit-device',[
          'devtypes'=>DevType::all(),'brands'=>Brand::all(),
          'statusList'=>$this->statusList])
        ->layoutData([
          'metaAutor'=>'Vasilyeva Svitlana',
          'titlePage'=>$this->titlePage
        ])->layout('components.layouts.app');
    }
}
