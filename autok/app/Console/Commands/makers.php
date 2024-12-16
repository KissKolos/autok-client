<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Maker;

class makers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:Maker {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload makers.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function handle()
    {
 
        $file = fopen('car-db.csv', 'r');
        fgetcsv($file, 1000, ',');
        fgetcsv($file, 1000, ',');
        $adatok = array();
        while (($data = fgetcsv($file,1000,',')) !== FALSE){
            if(!in_array($data[1], $adatok)){
                array_push($adatok, $data[1]);
            }
        }
        $bar = $this->output->createProgressBar(count($adatok));
        $bar->start();
        
        foreach($adatok as $x){
            $entity = new Maker();
            $entity->name = $x;
            $entity->save();
            $bar->advance();
        }
        $bar->finish();
        fclose($file);
    }
}