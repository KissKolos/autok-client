<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transmission;

class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const ITEMS = [
        'mechanikus',
        'félautomata',
        'automata',
        'szekvenciális',
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $key => $value) {
            $body = new Transmission();
            $body->name = $value;
            $body->save();
        }
    }
}
