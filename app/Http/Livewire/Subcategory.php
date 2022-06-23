<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use App\Models\Subcategory as ModelsSubcategory;
use App\Models\Village;
use Livewire\Component;

class Subcategory extends Component
{
    public $category;
    public $subcategories;
    public $villages;
    public $village;
    public $villageId;
    public $year;
    public $table;
    public $changeChart;
    private $chart;
    private $villagesCharts;

    protected $listeners = [
        'reloadSubcategory' => 'reload',
        'changeTable' => 'changeTable',
    ];

    public function mount($categoryId, $year, $villageId) {
        $this->category = Category::whereId($categoryId)->first();
        $this->village = Village::whereId($villageId)->first() ?? Village::first();
        $this->villageId = $this->village->id;
        $this->villages = Village::get();
        $this->year = $year;
        $this->table = false;
        $this->subcategories = ModelsSubcategory::where('category_id', $this->category->id)->get();
        $this->changeChart = true;
        $this->villagesCharts = [];
    }

    public function reload($categoryId) {
        $this->category = Category::whereId($categoryId)->first();
        $this->subcategories = ModelsSubcategory::where('category_id', $this->category->id)->get();
        $this->buildChart();
        $this->buildVillageCharts();
    }

    public function buildChart() {
        $this->chart = new PieChartModel();
        $this->chart
            ->setAnimated(true)
            ->withLegend();

        foreach ($this->subcategories as $subcategory) {
            $banker = $subcategory->bankers()
                                ->where('village_id', $this->village->id)
                                ->where('year', $this->year)
                                ->first();
            $value = $banker->value ?? 0;

            $color = dechex(rand(0x000000, 0xFFFFFF));
            $this->chart->addSlice($subcategory->name, (int)$value, '#'.$color);
        }
    }

    public function buildVillageCharts() {
        foreach ($this->villages as $village) {
            $village->color = dechex(rand(0x000000, 0xFFFFFF));
        }

        foreach ($this->subcategories as $subcategory) {
            $chart = new PieChartModel();
            $chart->setAnimated(true)
                ->withoutLegend();

            foreach ($this->villages as $village) {
                $banker = $subcategory->bankers()
                                    ->where('village_id', $village->id)
                                    ->where('year', $this->year)
                                    ->first();
                $value = $banker->value ?? 0;

                $chart->addSlice($village->name, (int)$value, '#'.$village->color);
            }
            $this->villagesCharts[$subcategory->name] = $chart;
        }
    }

    public function changeTable($bool) {
        $this->table = $bool;
        $this->reload($this->category->id);
    }

    public function render()
    {
        $this->reload($this->category->id);
        return view('livewire.subcategory', [
            'chart' => $this->chart,
            'villagesCharts' => $this->villagesCharts,
        ]);
    }
}
