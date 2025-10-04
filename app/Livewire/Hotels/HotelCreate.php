<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class HotelCreate extends Component
{
    #[Title('Create Hotel')]

    #[Validate('required|min:3', message: 'Field nama harus diisi dan minimal 3 karakter')]
    public $name = '';

    #[Validate('required', message: 'Field phone harus diisi')]
    public $phone = '';

    #[Validate('nullable|email', message: 'Format email tidak valid')]
    public $email = '';

    #[Validate('required', message: 'Field address harus diisi')]
    public $address = '';

    #[Validate('required|numeric|min:1|max:5', message: 'Field stars harus diisi antara 1-5')]
    public $stars = ''; // Tetap pakai $stars

    #[Validate('required', message: 'Field check in time harus diisi')]
    public $check_in_time = '';

    #[Validate('required', message: 'Field check out time harus diisi')]
    public $check_out_time = '';

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create()
    {
        $this->validate();
        
        Hotel::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'star' => $this->stars, // Mapping: $stars -> star
            'check_in_time' => $this->check_in_time,
            'check_out_time' => $this->check_out_time,
        ]);
        
        session()->flash('message', 'Hotel berhasil dibuat');
        return $this->redirect('/hotels', navigate: true);
    }
}