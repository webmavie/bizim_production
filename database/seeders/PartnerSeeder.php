<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;
class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
             Partner::create([
                'logo' => 'https://icon-library.com/images/phoenix-icon-png/phoenix-icon-png-29.jpg'
            ]);
        }
    }
}
