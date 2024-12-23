<?php

use App\Livewire\Counters\Counter;
use App\Livewire\Users\RegisterUser;
use App\Livewire\Users\AllUser;
use App\Livewire\Brands\AllBrand;
use App\Livewire\Devices\ListDevice;
use App\Livewire\Devices\AddDevice;
use App\Livewire\Devices\EditDevice;


//use App\Livewire\AddCar;
//use App\Livewire\Brand\ListBrand;
///use App\Livewire\Brand\EditBrand;
//use App\Livewire\Brand\AddBrand;

//use App\Livewire\EditCar;

use Illuminate\Support\Facades\Route;


Route::get('/foo', function(){
    return foo();
});
Route::get('/', function () {
    return view('welcome');
});



// Route::get('/counter/{counter}', Counter::class);
Route::get('/counter', Counter::class);
Route::get('/register', RegisterUser::class);
Route::get('/users', AllUser::class);
Route::get('/brands', AllBrand::class);
Route::get('/devices', ListDevice::class);
Route::get('/devices/add', AddDevice::class);
Route::get('/devices/edit/{id}', EditDevice::class);
