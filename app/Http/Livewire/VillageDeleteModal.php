<?php

namespace App\Http\Livewire;

use App\Models\Village;
use Exception;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class VillageDeleteModal extends ModalComponent
{
    public $village;

    public function mount($id) {
        $this->village = Village::whereId($id)->first();
    }

    public function deleteVillage() {
        try {
            $this->village->delete();
            $this->emit('success', 'Desa dihapus');
            $this->emitTo('village', 'reloadVillage');
        } catch (Exception $e) {
            $this->emit('error', 'Gagal menghapus');
        }
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.village-delete-modal');
    }
}
