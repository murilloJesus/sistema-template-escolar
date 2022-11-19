<?php

namespace App\Classes;

use Illuminate\Support\Facades\Storage;

class DataRetriever {

    const allDatas = [
        'structure',
        'institutional'
    ];

    static public function getData($names = []){

        $returnData = (object)[];

        foreach ($names ? $names : self::allDatas as $value) {
            $returnData->{$value} = json_decode(Storage::disk('data')->get(self::getPath($value)));
        }

        return $returnData;

    }

    static public function getConfig($config){

        $fileName = explode(".", $config)[0];

        $data = self::getData([$fileName]);

        return self::findInTree($data, $config);

    }

    static public function getContent($page_name){

        foreach ((self::getData(['structure']))->structure as $page) {
            if($page->alias == $page_name) return $page;
        }

    }


    public static function getPath($name){
        return "$name.json";
    }


    private function findInTree($data, $path){
        $exp_path = explode('.', $path);

        foreach ($exp_path as $key) {
            $data = $data->{$key};
        }

        return $data;
    }
}



