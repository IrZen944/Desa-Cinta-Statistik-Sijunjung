<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villages = explode(';', Storage::get('13_20201.txt'));

        foreach ($villages as $village) {
            $v = explode(',', $village);
            Village::insert([
                'id_desa' => $v[0],
                'name' => $v[8],
                'code' => $v[4],
                'district_id' => $v[7],
            ]);
        }
    }
}
