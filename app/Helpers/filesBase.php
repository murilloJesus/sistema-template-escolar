<?php


/**
 * Create a file class PHP
 *
 * @param  Object $configs
 * @return void
 */
    if(!function_exists('base_class_file')){
        function base_class_file($configs){

            return <<<EOT
<?php

namespace App\Classes;

class $configs->className
{

    /**
     * Create a new class instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

}

EOT;

        }
    }
