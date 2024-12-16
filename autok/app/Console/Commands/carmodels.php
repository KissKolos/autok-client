<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Maker;

class carmodels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:Model {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload car models from a CSV file.';

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
        config(["database.connections.mysql.database" => 'autok']);

        $file = fopen('car-db.csv', 'r');
        fgetcsv($file, 1000, ',');

        $carModels = [];
        

        while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
            if (!in_array($data[1], $carModels)) {
                $carModels[] = $data[1]; 
            }
        }

        $bar = $this->output->createProgressBar(count($carModels));
        $bar->start();


        foreach ($carModels as $model) {
            Maker::firstOrCreate(['name' => $model]);
            $bar->advance();
        }

        $bar->finish();
        fclose($file);
    }
}
