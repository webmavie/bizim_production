<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceImage;
class ServiceImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'https://static.tildacdn.com/tild3662-3030-4134-b831-613433353439/IMG_0036.jpg',
            'https://static.tildacdn.com/tild6264-3261-4661-b933-663236373731/IMG_00362.jpg',
            'https://static.tildacdn.com/tild3366-6330-4865-a466-346161663661/IMG_003623.jpg'
        ];
        foreach ($images as $image) {
            ServiceImage::create([
                'service_id' => 1,
                'image' => $image,
            ]);
        }
        $images1= [
            'https://static.tildacdn.com/tild3330-3735-4533-a666-316630356665/7.gif',  
            'https://static.tildacdn.com/tild3764-3330-4635-b038-373464633537/4.gif',
            'https://static.tildacdn.com/tild3532-6632-4634-a439-303533343436/2.gif',
            'https://static.tildacdn.com/tild3761-3334-4261-a139-336262643632/6.gif',
        ];
        foreach ($images1 as $image) {
            ServiceImage::create([
                'service_id' => 2,
                'image' => $image,
            ]);
        }
    }
}
