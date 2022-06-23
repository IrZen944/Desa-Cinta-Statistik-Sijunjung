<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Admin',
            'email' => 'admin@sijunjung.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('desacantik'),
        ]);
    }
}
