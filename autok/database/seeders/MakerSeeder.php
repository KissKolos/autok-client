<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Maker;

class MakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $makers = DB::select('SELECT DISTINCT make AS name FROM `car_db`');
        $logoPath = env('APP_LOGO_PATH','public/logos/');
        $bar = $this ->command->getOutput()->createProgressBar(count($makers));
 
        foreach ($makers as $maker) 
        {
            $entity = new Maker();
            $entity->name = $maker->name;

            $filename = str_replace(' ','_',$maker->name). ".png";

            
            if(file_exists($logoPath . $filename)){
                $entity->logo = $filename;
                echo $logoPath . $filename."\n";
            }
            $entity->save();
            $bar->advance();
        }
        $bar->finish();
    }
}
