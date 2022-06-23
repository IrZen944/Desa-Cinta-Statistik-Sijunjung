<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::insert([
            'id_kec' => 50,
            'name' => 'Kamang Baru',
        ]);

        District::insert([
            'id_kec' => 60,
            'name' => 'Tanjung Gadang',
        ]);

        District::insert([
            'id_kec' => 70,
            'name' => 'Sijunjung',
        ]);

        District::insert([
            'id_kec' => 71,
            'name' => 'Lubuk Tarok',
        ]);

        District::insert([
            'id_kec' => 80,
            'name' => 'IV Nagari',
        ]);

        District::insert([
            'id_kec' => 90,
            'name' => 'Kupitan',
        ]);

        District::insert([
            'id_kec' => 100,
            'name' => 'Koto Tujuh',
        ]);

        District::insert([
            'id_kec' => 110,
            'name' => 'Sumpur Kudus',
        ]);
    }
}
