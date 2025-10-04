<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Livewire\Dashboard;
use App\Livewire\Hotels\HotelCreate;
use App\Livewire\Hotels\HotelList;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);
Route::get('/hotels',HotelList::class);
Route::get('/hotels/create', HotelCreate::class);