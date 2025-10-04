<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        dd(auth()->user());
        return view('livewire.dashboard');
    }
}
