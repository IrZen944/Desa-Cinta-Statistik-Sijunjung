<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Exception;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CategoryModal extends ModalComponent
{
    public $category;

    protected $rules = [
        'category.name' => 'required|unique:categories,name|max:50',
    ];

    public function mount($id) {
        $this->category = Category::whereId($id)->first() ?? new Category();
    }

    public function saveCategory() {
        $this->validate();
        try {
            $this->category->save();
            $this->emit('success', 'Kategori disimpan');
            $this->emitTo('dashboard', 'reloadDashboard');
        } catch (Exception $e) {
            $this->emit('error', 'Gagal menyimpan');
        }
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.category-modal');
    }
}
