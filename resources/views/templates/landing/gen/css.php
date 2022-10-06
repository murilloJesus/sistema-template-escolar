<?php

use App\Classes\ColorCalculator;

    $colors = $configs->institutional->colors;

    $primary = new ColorCalculator($colors->primary);
    $complementary = $primary->fromDefaultRuler('primary');

    $secundary = new ColorCalculator($colors->secundary);
    $complementary = array_merge($complementary, $secundary->fromDefaultRuler('secundary'));

    $return[":root"]['--primary'] = $colors->primary;
    $return[":root"]['--secundary'] = $colors->secundary;
    $return[":root"]['--tertiary'] = $colors->tertiary;
    $return[":root"]['--quaternary'] = $colors->quaternary;

    foreach ($complementary as $nome => $valor)
        $return[":root"]["--$nome"] = $valor;



    foreach ($configs->structure as $key => $page):
        if(in_array($page->type, ['galery']) ) continue;

        $return["#$page->alias"]['background'] = "url(\"images/overlay.png\"), url(/public/storage/images/$page->alias.jpg)";
        $return["#$page->alias"]['background-size'] = "cover";
        $return["#$page->alias"]['background-attachment'] = "fixed, fixed";
        $return["#$page->alias"]['background-position'] = "top left, bottom center";
        $return["#$page->alias"]['background-repeat'] = "repeat, no-repeat";

    endforeach;

return $return;
