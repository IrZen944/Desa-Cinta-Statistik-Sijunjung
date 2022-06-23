<?php

namespace App\Http\Livewire;

use App\Models\Subcategory;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class SubcategoryModal extends ModalComponent
{
    use WithFileUploads;

    public $subcategory;
    public $photo;
    public $categoryId;

    protected $rules = [
        'subcategory.name' => 'required|max:50',
        'photo' => 'required|image|max:2048',
    ];

    public function mount($id, $categoryId) {
        $this->subcategory = Subcategory::whereId($id)->first() ?? new Subcategory();
        $this->categoryId = $categoryId;
    }

    public function saveSubcategory() {
        $this->validate();
        try {
            $this->subcategory->category_id = $this->categoryId;
            $this->subcategory->save();
            $this->photo->storeAs('images/subcategory', $this->subcategory->id.'.png');

            $this->emit('success', 'Subkategori disimpan');
            $this->emitTo('subcategory', 'reloadSubcategory', $this->categoryId);
        } catch (Exception $e) {
            $this->emit('error', 'Gagal menyimpan');
        }
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.subcategory-modal');
    }
}
