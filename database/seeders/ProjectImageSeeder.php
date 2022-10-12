<?php

namespace Database\Seeders;

use App\Models\ProjectImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectImage::created([
            'project_id' => 1,
            'path' => 'https://miro.medium.com/max/1400/1*m0s2io11J82PR7miqan92w.png'
        ]);
    }
}
