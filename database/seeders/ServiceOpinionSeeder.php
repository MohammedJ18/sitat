<?php

namespace Database\Seeders;

use App\Models\ServiceOpinion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceOpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceOpinion::create([
            'service_id' => '1',
            'user_id' => '1',
            'content' => 'laravel',
            'stars' => '5',
        ]);
        
        ServiceOpinion::create([
            'service_id' => '1',
            'user_id' => '1',
            'content' => 'laravel',
            'stars' => '5',
        ]);
    }
}
