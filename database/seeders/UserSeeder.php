<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 1
        User::create([
            'name' => 'Mohammed',
            'email' => 'mohammed@gamil.com',
            'password' => bcrypt('121212'),
        ]);

        // id = 2
        User::create([
            'name' => 'Fatma Nawfal',
            'email' => 'fatma.nawfal@gamil.com',
            'password' => bcrypt('121212'),
        ]);
    }
}
