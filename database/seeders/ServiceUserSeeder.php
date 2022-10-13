<?php

namespace Database\Seeders;

use App\Models\ServiceUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceUser::create([
            'service_id'=>1,
            'point' => 2222,
        ]);
    }
}
