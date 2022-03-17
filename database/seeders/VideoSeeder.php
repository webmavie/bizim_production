<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            'https://www.youtube.com/embed/7bOptq-NPJQ',
            'https://www.youtube.com/embed/nqye02H_H6I',
        ];
        foreach ($links as $link) {
            Video::create([
                'link' => $link,
                'service_id' => 3,
            ]);
        }
    }
}
