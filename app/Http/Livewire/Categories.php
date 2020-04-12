<?php

namespace App\Http\Livewire;

use App\Services\FoursquareService;
use Livewire\Component;

class Categories extends Component
{

    public function render()
    {
        $foursquare = New FoursquareService();
        return view('livewire.categories',['categories' => $foursquare->getCategories()]);
    }

}
