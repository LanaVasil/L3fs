<?php

use WithPagination;

public $SelectedCat = [];
public $selected_items = [];
public $min_price = '';
public $max_price = '';
public $filter;
public $search;
public $car_brand_id;

public $queryString=[
    'SelectedCat',
    'selected_items',
    'min_price',
    'max_price',
    'filter',
    'search',
    'car_brand_id'
];

protected $listeners = ['queryStringUpdateSelection' ,'queryStringRemove','Brands'];

public function Brands($car_brand_id)
{
    $this->value = $car_brand_id;
}

public function queryStringUpdateSelection($location)
{
    $this->selected_items = $location;
}

public function queryStringRemove($location)
{
    $this->selected_items = $location;
}

public function SelectCategory()
{
    dd($this->selected_items);
}
public function SelectPrice()
{
    dd($this->min_price);
}

public function render()
{


    $carcategories =CarCategory::all();
    $cars = Car::all();

         return view('livewire.cars-index',[

            'cars'=>Car::with('user','carcategory')
            ->when($this->SelectedCat = array_filter($this->SelectedCat), function($query) 
            {
                return $query->whereIn('carcategory_id', array_keys($this->SelectedCat));
                
            })
            ->when($this->selected_items = array_filter($this->selected_items), function($query) 
            {
                return $query->whereIn('location_id', array_keys($this->selected_items));
                
            })
            ->when($this->min_price !=='' || $this->max_price !=='' , function($query) 
            {
                return $query->whereBetween('price', [$this->min_price,$this->max_price]);
            })
            ->when($this->filter && $this->filter === 'Latest items', function ($query) {

                return $query->orderByDesc('created_at');
            })
            ->when($this->filter && $this->filter === 'Cheapest', function ($query) {

                return $query->orderBy('price', 'asc');
            })
            ->when($this->filter && $this->filter === 'Expensive', function ($query) {

                return $query->orderBy('price', 'desc');
            })
            ->when(strlen($this->search) >= 3, function ($query) {
                return $query->where('name', 'like', '%'.$this->search.'%');            
            })
            ->when($this->car_brand_id , function ($query) {
                return $query->where('model', $this->car_brand_id);
            })->peginate(5)
            ->get(),
     

         'carcategories'=>$carcategories,
         ]);
}
