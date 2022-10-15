<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::create([
            'user_id'=>1,
            'title' => 'dont know',
            'content' => 'also dont know',
            'points' => 1111,
            'puichase_times'=>'11',
                
        ]);

        Services::create([
            'user_id' => 1,
            'title' => 'dont know',
            'content' => 'also dont know',
            'points' => 1111,
            'puichase_times' => '11',

        ]);
    }
}