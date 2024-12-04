<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Registeruser;
use App\Livewire\DropDown;
use App\Livewire\FileUpload;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/register', Registeruser::class);
Route::get('/dropdown', DropDown::class);
Route::get('/fileupload', FileUpload::class);
