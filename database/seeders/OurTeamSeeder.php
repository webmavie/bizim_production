<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OurTeam;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i = 0; $i < 4; $i++) {
            OurTeam::create([
                'image' => 'https://avatarfiles.alphacoders.com/108/thumb-108304.jpg',
                'name' => 'Chloe',
                'position' => 'Project Manager',
            ]);
        }
    }
}
