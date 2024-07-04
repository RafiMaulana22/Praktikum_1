<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Rafi Nur Maulana',
                'email' => 'rafi@praktikum.site',
                'password' => bcrypt('rafi123')
            ]
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
