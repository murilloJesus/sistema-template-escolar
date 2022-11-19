<?php

namespace App\Classes;

use Illuminate\Support\Facades\Storage;

class FontInjector
{

    const CONFIG_PATH = 'institutional.fonts';

    const ORIGINAL_URI = 'https://fonts.googleapis.com/css2?';

    /**
     * Create a new class instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public static function cssRules(){
        $data = DataRetriever::getConfig(self::CONFIG_PATH);

        $fonts = [];

        if($data->title){
            $fonts[':root']['--font-title'] = "'$data->title'";
        }

        if($data->text){
            $fonts[':root']['--font-text'] = "'$data->text'";
        }

        if($data->light){
            $fonts[':root']['--font-light'] = "'$data->light'";
        }

        return $fonts;
    }

    public static function generate(){
        Storage::disk('views')->put('components/fonts.blade.php', self::constructor());
    }


    public static function getUri(){
        $fonts = self::getFonts();

        $uri  = self::ORIGINAL_URI;

        foreach ($fonts as $key => $font) {
            if($key+1 < sizeof($fonts)){
                $uri .= "family=$font&";
            }else{
                $uri .= "family=$font&display=swap";
            }
        }

        return $uri;

    }

    private static function getFonts(){
        $data = DataRetriever::getConfig(self::CONFIG_PATH);

        $fonts = [];

        if($data->title){
            $fonts[] = str_replace(' ', '+', $data->title);
        }

        if($data->text){
            $fonts[] = str_replace(' ', '+', $data->text);
        }

        if($data->light){
            $fonts[] = str_replace(' ', '+', $data->light);
        }

        return $fonts;

    }

    private static function constructor(){

        $uri = self::geturi();

        return <<<EOT
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="$uri" rel="stylesheet">
EOT;
    }

}
