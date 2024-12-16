<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fuel;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {      
        $fuels = [
            ['name' => 'benzin'],
            ['name' => 'dízel'],
            ['name' => 'benzin/lpg'],
            ['name' => 'benzin/cng'],
            ['name' => 'dízel/lpg'],
            ['name' => 'dízel/cng'],
            ['name' => 'hibrid (benzin)'],
            ['name' => 'hibrid (dízel)'],
            ['name' => 'elektromos'],
            ['name' => 'etanol'],
            ['name' => 'biodízel'],
            ['name' => 'LPG'],
            ['name' => 'CNG'],
            ['name' => 'hidrogén'],
        ];
        foreach ($fuels as $fuel) {
            $entity = new Fuel();
            $name = $fuel['name'];
            $entity->name = $name;
            $entity->save();
        }
    }
}

