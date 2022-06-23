<?php

namespace App\Http\Livewire;

use App\Models\District;
use App\Models\Village;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class VillageDescription extends ModalComponent
{
    private $village;

    public function mount($id) {
        $this->village = Village::whereId($id)->first() ?? new Village();
        $district = District::whereId($this->village->district_id)->first();
        $this->village->district_name = $district->name;
    }

    public function render()
    {
        return view('livewire.village-description', ['village' => $this->village]);
    }
}
