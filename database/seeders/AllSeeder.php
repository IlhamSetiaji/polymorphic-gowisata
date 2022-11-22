<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            $tour = [
                'name' => 'Tour ' . $i,
                'desc' => 'Desc Tour ' . $i,
            ];
            $hotel = [
                'name' => 'Hotel ' . $i,
                'desc' => 'Desc Hotel ' . $i,
            ];
            $package = [
                'name' => 'Package ' . $i,
                'desc' => 'Desc Package ' . $i,
            ];
            $tour = Tour::create($tour);
            $tour->packages()->create($package);
            $hotel = Hotel::create($hotel);
            $hotel->packages()->create($package);
        }
    }
}
