<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CreateClass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:class {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a class to support development on aplication';


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
     * @return int
     */
    public function handle()
    {
        $configs = $this->setConfigs();

        $disk = Storage::disk('classes');

        if(!in_array($this->argument('name').".php", $disk->allFiles())){
            $disk->put($this->argument('name').'.php', base_class_file($configs));
            echo "Classe ".$this->argument('name')." criada com sucesso. \n";
        } else {
            echo "Classe ".$this->argument('name')." já existe. \n";
        }


        return $this->argument('name');
    }

    /**
     * Configure file inject data
     *
     * @return Object
     */
    private function setConfigs(){
        return  (object) [
            'className' => $this->argument('name')
        ];
    }
}
