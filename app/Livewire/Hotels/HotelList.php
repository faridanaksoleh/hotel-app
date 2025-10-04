<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;

class HotelList extends Component
{
    #[Title('Hotels')]

    public $search;
    
    public function render()
    {
        return view('livewire.hotels.hotel-list',[
            'hotels' => Hotel::where('address', 'like', '%' . $this->search . '%')->get()
        ]);
    }

    public function delete($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return $this->redirect('/hotels', navigate: true);
    }
    
}
