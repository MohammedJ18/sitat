<?php

namespace Database\Seeders;

use App\Models\ProjectComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        ProjectComment::create([
            'project_id' => '1',
            'user_id' => '1',
            'content' => 'laravel',
        ]);
    
    }
}
