<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            [
                'name' => 'fehér',
                'hexa_code' => '#FFFFFF',
            ],
            [
                'name' => 'sárga',
                'hexa_code' => '#FFFF00',
            ],
            [
                'name' => 'narancs',
                'hexa_code' => '#FFA500',
            ],
            [
                'name' => 'piros',
                'hexa_code' => '#FF0000',
            ],
            [
                'name' => 'bíbor / lila',
                'hexa_code' => '#800080',
            ],
            [
                'name' => 'kék',
                'hexa_code' => '#0000FF',
            ],
            [
                'name' => 'zöld',
                'hexa_code' => '#008000',
            ],
            [
                'name' => 'szürke',
                'hexa_code' => '#808080',
            ],
            [
                'name' => 'barna',
                'hexa_code' => '#A52A2A',
            ],
            [
                'name' => 'fekete',
                'hexa_code' => '#000000',
            ],
        ];

        foreach ($colors as $color) {
            $entity = new Color();
            $name = $color['name'];
            $hexa = $color['hexa_code'];
            $entity->name = $name;
            $entity->hexa_code = $hexa;
            $entity->save();
        }
    }
}