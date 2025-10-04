<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelEdit extends Component
{
    #[Title('Edit Hotel')]

    #[Validate('required|min:3', message: 'Field nama harus diisi dan minimal 3 karakter')]
    public $name = '';

    #[Validate('required', message: 'Field phone harus diisi')]
    public $phone = '';

    #[Validate('nullable|email', message: 'Format email tidak valid')]
    public $email = '';

    #[Validate('required', message: 'Field address harus diisi')]
    public $address = '';

    #[Validate('required|numeric|min:1|max:5', message: 'Field stars harus diisi antara 1-5')]
    public $stars = '';

    #[Validate('required', message: 'Field check in time harus diisi')]
    public $check_in_time = '';

    #[Validate('required', message: 'Field check out time harus diisi')]
    public $check_out_time = '';

    public $hotel;
    
    public function mount($id) {
        $this->hotel = Hotel::find($id);
        $this->name = $this->hotel->name;
        $this->phone = $this->hotel->phone;
        $this->email = $this->hotel->email;
        $this->address = $this->hotel->address;
        $this->stars = $this->hotel->star;
        
        // FIX: Convert ke format datetime-local
        $this->check_in_time = \Carbon\Carbon::parse($this->hotel->check_in_time)->format('Y-m-d\TH:i');
        $this->check_out_time = \Carbon\Carbon::parse($this->hotel->check_out_time)->format('Y-m-d\TH:i');
    }
    
    public function render()
    {
        return view('livewire.hotels.hotel-edit');
    }

    public function update()
    {
        $this->validate();
        $this->hotel->update($this->all());
        return $this->redirect('/hotels', navigate: true);
    }
}