<?php

namespace App\Http\Livewire;

use App\Models\Subcategory;
use Exception;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class SubcategoryDeleteModal extends ModalComponent
{
    public $subcategory;

    public function mount($id) {
        $this->subcategory = Subcategory::whereId($id)->first();
    }

    public function deleteSubcategory() {
        try {
            $this->subcategory->delete();
            $this->emit('success', 'Subkategori dihapus');
            $this->emitTo('dashboard', 'reloadDashboard');
        } catch (Exception $e) {
            $this->emit('error', 'Gagal menghapus');
        }
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.subcategory-delete-modal');
    }
}
