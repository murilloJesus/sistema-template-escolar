<?php

    if(!function_exists('___')){
        function ___($string, $data){
            $locale = $data;
            $breadcrumb = explode('.', $string);

            foreach ($breadcrumb as $key => $value) {
                $locale = $locale->{$value};
            }

            return $locale;

        }
    }
