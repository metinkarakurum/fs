<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\FoursquareService;

class Places extends Component
{
    public $search;

    public function mount()
    {
        $this->search = request('category') ?? [];
    }

    public function render()
    {
        $service =  New FoursquareService();
        $places  =  $service->getVenues($this->search);
        return view('livewire.places', [
            'places' => $places,
        ]);
    }
}
