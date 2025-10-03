<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Livewire\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);