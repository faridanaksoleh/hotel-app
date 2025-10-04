<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;

class HotelCreate extends Component
{
    #[Title('Create Hotel')]

    public $name;
    public $phone;
    public $email;
    public $address;
    public $star;
    public $check_in_time;
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create()
    {
        Hotel::create($this->all());
        return $this->redirect('/hotels', navigate: true);
    }
}
