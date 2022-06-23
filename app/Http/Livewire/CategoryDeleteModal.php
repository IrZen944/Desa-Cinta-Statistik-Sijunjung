<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Exception;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CategoryDeleteModal extends ModalComponent
{
    public $category;

    public function mount($id) {
        $this->category = Category::whereId($id)->first();
    }

    public function deleteCategory() {
        try {
            $this->category->delete();
            $this->emit('success', 'Kategori dihapus');
            $this->emitTo('dashboard', 'reloadDashboard');
        } catch (Exception $e) {
            $this->emit('error', 'Gagal menghapus');
        }
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.category-delete-modal');
    }
}
