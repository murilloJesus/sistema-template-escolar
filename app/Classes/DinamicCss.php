<?php

namespace App\Classes;

use Illuminate\Support\Facades\Storage;

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
        // Mantemos as configurações para o REQUIRE poder utilizar seus dados
        $configs = DataRetriever::getData(['structure', 'institutional']);

        //iniciamos a lista de regras com os dados gerados automaticos de outras classes
        $rule_list  = self::external_classes_generate([
            FontInjector::cssRules(),

            //REGRA FINAL DO TEMPLATE
            //Deve sempre ser o ultimo na iteração
            require (resource_path('views/templates/'.env('TEMPLATE').'/gen/css.php'))
        ]);


        //constrói o css final
        Storage::disk('public')->put('css/css.css', self::constructor($rule_list));
    }

    static public function external_classes_generate($external_classes_rules){

        $rules = array();

        foreach($external_classes_rules as $r){
            $rules= array_merge_recursive($rules, $r);
        }

        return $rules;

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
