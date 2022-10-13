<?php

namespace Database\Seeders;

use App\Models\ServiceImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceImages::create([
            'service_id'=>1,
            'path'=>'wewewww',
            
        ]);
    }
}
