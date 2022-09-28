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
                $returnData->{$value} = json_decode(Storage::get(self::getPath($value)));
            }

            return $returnData;

        }


        public static function getPath($name){
            return "data/$name.json";
        }
    }



