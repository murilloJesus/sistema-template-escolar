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

        $rule_list = require (resource_path('views/templates/'.env('TEMPLATE').'/gen/css.php'));

        Storage::disk('public')->put('css/css.css', self::constructor($rule_list));
    }

    static function constructor($rule_list){
        $file = <<<EOT
/**
* Automatic generated css
* Changes will be overwrite on next iteration
*/


EOT;

        foreach($rule_list as $ruler => $rules){
            $file .= <<<EOT

$ruler {
EOT;
            foreach ($rules as $name => $value) {
                $file .= <<<EOT

    $name: $value;
EOT;
            }

            $file .= <<<EOT

}
EOT;
        }

        return $file;
    }

}
