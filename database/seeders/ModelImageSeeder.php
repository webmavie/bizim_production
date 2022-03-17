<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModelImage;
class ModelImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'https://static.tildacdn.com/tild6235-6436-4831-b464-653466343131/IMG_8224.JPG',
            'https://static.tildacdn.com/tild6236-3363-4439-b034-363965383165/14516546_17850276884.jpg',
            'https://static.tildacdn.com/tild3033-3938-4534-a161-626335346336/16903139_12845112683.jpg',
            'https://static.tildacdn.com/tild6336-3037-4533-a536-633761626430/Optimized-DSC07730.jpg',
        ];
        foreach ($images as $image) {
            ModelImage::create([
                'image' => $image,
                'model_id' => 1,
            ]);
        }
    }
}
