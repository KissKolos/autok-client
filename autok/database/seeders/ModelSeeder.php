<?php

namespace Database\Seeders;

use App\Models\Maker;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carmodel;

class ModelSeeder extends Seeder
{
    public function run(): void
    {
        $makers = Maker::all();

        $bar = $this->command->getOutput()->createProgressBar(count($makers));
        $bar->setFormat("[%bar%]");
        $bar->setBarCharacter('*');


        foreach($makers as $maker) {
            $models = DB::select("SELECT DISTINCT model as name FROM `car_db` WHERE make = '{$maker->name}';");
            foreach($models as $model) {
                $entity=new Carmodel();
                $entity->name=$model->name;
                $entity->maker_id=$maker->id;
                $entity->save();
                $bar->advance();
            }
        }
        $bar->finish();

    }
}