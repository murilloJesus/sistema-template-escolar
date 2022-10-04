<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
class CreateTemplate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:template {template}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a template structure scaffold';

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
        $template = $this->argument('template');

        //
        //  Criação da pasta publica para os assets do novo template
        //
        $storage = Storage::disk('assets');

        if( !in_array($template, $storage->directories()) ){
            $storage->makeDirectory($template);
            echo ("public/assets/$template criado com sucesso. \n");
        }else{
            echo ("public/assets/$template já existe. \n");
        }

        $storage = Storage::disk('resources');

        if( !in_array($template, $storage->directories('views/templates')) ){

            $dir = $storage->allFiles("template");

            foreach ($dir as $file) {
                $new_file = str_replace("template/", "views/templates/$template/", $file);
                try{
                    $storage->copy($file, $new_file);
                    echo ("$new_file criado com sucesso. \n");
                } catch(Exception $e){
                    echo ("$new_file já existe. \n");
                }
            }
        }else{
            echo ("views/templates/$template já existe. \n");
        }





    }
}
