<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WModel;
class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WModel::create([
            'name' => 'Таисия С.',
            'slug' => 'tayzisya-s',
            'main_image' => 'https://static.tildacdn.com/tild3633-3030-4136-b366-313065343239/Optimized-DSC08215.jpg',
            'image' => 'https://static.tildacdn.com/tild6663-6166-4164-b038-623362636232/IMG_8222.TIF',
        ]);
    }
}
