<?php

namespace App\Classes;

use Illuminate\Support\Facades\Storage;

use function Composer\Autoload\includeFile;

class DinamicCss
{

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    static public function generate(){
        $configs = DataRetriever::getData(['structure', 'institutional']);

        Storage::disk('public')->put('css/css.css', require (resource_path('views/templates/'.env('TEMPLATE').'/gen/css.php')));
    }


}
