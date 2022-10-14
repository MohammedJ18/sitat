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
        User::create([
            'name' => 'Mohammed',
            'email' => 'mohammed@gamil.com',
            'password' => bcrypt('121212'),
        ]);

        User::create([
            'name' => 'Ddd',
            'email' => 'fatma1@gamil.com',
            'password' => bcrypt('121212'),
        ]);
        
    }
}
