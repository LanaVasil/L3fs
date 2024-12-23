<?php

namespace App\Livewire\Devices;

use Livewire\Component;
use App\Models\Device;
use App\Models\DevType;
use App\Models\Brand;


class AddDevice extends Component
{
    public $titlePage = 'Додати. Довідник пристроїв';
    // public $titleCols = ['number0'=>'#',
    //                     'dev_type_id'=>'Тип',
    //                     'brand_id'=>'Бренд',
    //                     'name'=>'Назва',
    //                     'note'=>'Примітка',
    //                     'status'=>'Статус',
    //                     'btn'=>'Дії',];
    public $dev_type_id = '';
    public $brand_id = '';
    public $name = '';
    public $note = '';
    public $status = '';
    public $statusList = [
        '1'=>'актуальні',
        '0'=>'неактуальні',
        '9'=>'не заправляються',
    ];

    public function saveRow(){
      $this->validate([
          'dev_type_id' => 'required',
          'brand_id' => 'required',
          'name' => ['required', 'string', 'min:3', 'max:255'],
          'note' => 'nullable',
          'status' => 'nullable',
      ]);

      try {
        $new_row = new Device;
        $new_row->name = $this->name;
        $new_row->save();

        session()->flash('success', 'Запис додано.');

        return $this->redirect('/devices', navigate:true);

      } catch (\Exception $e) {
        dd($e) ;
      }
    }

    public function render()
    {
        return view('livewire.devices.add-device',[
          'devtypes'=>DevType::all(),'brands'=>Brand::all(),])
        ->layoutData([
          'metaAutor'=>'Vasilyeva Svitlana',
          'titlePage'=>$this->titlePage
        ])->layout('components.layouts.app');
    }
}
