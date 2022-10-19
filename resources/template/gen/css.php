<?php

use App\Classes\ColorCalculator;

    $colors = $configs->institutional->colors;

    $return[":root"]["--primary:"] = $colors->primary;
    $return[":root"]["--secundary:"] = $colors->secundary;
    $return[":root"]["--tertiary:"] = $colors->tertiary;
    $return[":root"]["--quaternary:"] = $colors->quaternary;

    $primary = new ColorCalculator($colors->primary);
    $complementary = $primary->fromDefaultRuler('primary');

    $secundary = new ColorCalculator($colors->secundary);
    $complementary = array_merge($complementary, $secundary->fromDefaultRuler('secundary'));

    foreach ($complementary as $nome => $valor) {
        $return[":root"]["--$nome"] = $valor;
    }

return $return;
