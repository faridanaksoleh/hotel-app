<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Test;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', Test::class);

Route::get('/about', About::class);

Route::get('/contact', Contact::class);
