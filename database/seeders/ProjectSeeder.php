<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // project id = 1
        Project::create([
            'user_id' => 1,
            'title' => 'first project',
            'content' => 'any think about our first project',
            'status' => 1,
            'points' => 20
        ]);

        // project id = 2
        Project::create([
            'user_id' => 2,
            'title' => 'second project',
            'content' => 'any think about our second project',
            'status' => 2,
            'points' => 20
        ]);
    }
}
