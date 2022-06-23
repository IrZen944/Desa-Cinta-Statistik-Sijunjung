<?php

namespace App\Http\Livewire;

use App\Models\Banker;
use App\Models\Subcategory;
use Exception;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BankerModal extends ModalComponent
{
    public $banker;
    public $villageId;
    public $subcategoryId;
    public $year;

    protected $rules = [
        'banker.value' => 'required|numeric',
    ];

    public function mount($id, $villageId, $subcategoryId, $year) {
        $this->banker = Banker::whereId($id)->first() ?? new Banker();
        $this->villageId = $villageId;
        $this->subcategoryId = $subcategoryId;
        $this->year = $year;
    }

    public function saveBanker() {
        $this->validate();
        $this->banker->village_id = $this->villageId;
        $this->banker->subcategory_id = $this->subcategoryId;
        $this->banker->year = $this->year;
        try {
            $this->banker->save();

            $this->emit('success', 'Data disimpan');
            $this->emitTo('subcategory', 'reloadSubcategory', Subcategory::whereId($this->subcategoryId)->first()->category_id);
        } catch (Exception $e) {
            $this->emit('error', 'Gagal menyimpan');
        }
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.banker-modal');
    }
}
