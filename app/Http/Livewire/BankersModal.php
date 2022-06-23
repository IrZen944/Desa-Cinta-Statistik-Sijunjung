<?php

namespace App\Http\Livewire;

use App\Models\Banker;
use App\Models\Subcategory;
use App\Models\Village;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BankersModal extends ModalComponent
{
    public $village;
    public $subcategories;
    public $year;
    public $vals = [];

    public function mount($villageId, $categoryId, $year) {
        $this->village = Village::whereId($villageId)->first();
        $this->subcategories = Subcategory::where('category_id', $categoryId)->get();
        $this->year = $year;

        foreach ($this->subcategories as $subcategory) {
            $val = $subcategory->bankers()
                                ->where('village_id', $villageId)
                                ->where('year', $year)
                                ->first();
            if (!empty($val->value)) {
                $this->vals[$subcategory->id] = $val->value;
            } else {
                $this->vals[$subcategory->id] = '-';
            }
        }
    }

    public function saveBankers() {
        try {
            foreach ($this->subcategories as $subcategory) {
                if ($this->vals[$subcategory->id]!='-') {
                    $banker = Banker::where('village_id', $this->village->id)
                                    ->where('subcategory_id', $subcategory->id)
                                    ->where('year', $this->year)
                                    ->first() ?? new Banker();

                    $banker->village_id = $this->village->id;
                    $banker->subcategory_id = $subcategory->id;
                    $banker->year = $this->year;
                    $banker->value = $this->vals[$subcategory->id];
                    $banker->save();
                }
            }

            $this->emit('success', 'Data berhasil disimpan');
        } catch (Exception $e) {
            $this->emit('error', 'Data gagal disimpan');
        }

        $this->emit('closeModal');
        $this->emitTo('subcategory', 'reloadSubcategory', $this->subcategories[0]->category_id);
    }

    public function render()
    {
        return view('livewire.bankers-modal');
    }
}
