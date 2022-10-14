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
            'name' => 'admin',
            'email' => 'admin@gamil.com',
            'password' => bcrypt('121212'),
            'is_admin' => true,
            'points' => 20
        ]);

        // id = 2
        User::create([
            'name' => 'Mohammed',
            'email' => 'mohammed@gamil.com',
            'password' => bcrypt('121212'),
            'is_admin' => true,
            'points' => 20
        ]);

        // id = 3
        User::create([
            'name' => 'Fatma Nawfal',
            'email' => 'fatma.nawfal@gamil.com',
            'password' => bcrypt('121212'),
            'is_admin' => true,
            'points' => 20
        ]);
        
        User::create([
            'name' => 'Fatima2',
            'email' => 'fatima2@gamil.com',
            'password' => bcrypt('121212'),
            'points' => 20
        ]);
    
    
        User::create([
            'name' => 'Ddd',
            'email' => 'fatma1@gamil.com',
            'password' => bcrypt('121212'),
        ]);
        
    }
}
