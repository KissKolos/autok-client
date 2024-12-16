<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Body;

class BodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const ITEMS = [
        'Crossover',
        'Fastback',
        'Hardtop',
        'Hatchback',
        'Kabrió',
        'Kombi',
        'Kupé',
        'Liftback',
        'Limuzin',
        'Minivan',
        'Pickup',
        'Roadster',
        'Szedán',
        'Targa',
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $key => $value) {
            $body = new Body();
            $body->name = $value;
            $body->save();
        }
        
    }
}
