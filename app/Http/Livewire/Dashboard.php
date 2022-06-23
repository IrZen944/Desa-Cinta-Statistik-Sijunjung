<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Dashboard extends Component
{
    public $categories;
    public $selectedCategoryId;
    public $year;
    public $villageId;

    protected $listeners = [
        'reloadDashboard' => 'reload',
    ];

    public function mount($id=NULL, $year='2021', $villageId=1) {
        $this->categories = Category::get();
        $this->year = $year;
        $this->villageId = $villageId;
        if (!empty($id)) {
            $this->selectedCategoryId = $id;
        } else {
            $this->selectedCategoryId = !empty($this->categories[0]) ? $this->categories[0]->id : '';
        }
    }

    public function reload() {
        $this->categories = Category::get();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
