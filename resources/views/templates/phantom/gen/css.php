<?php

    $colors = $configs->institutional->colors;

    return <<<EOT

    :root {
        --primary: $colors->primary;
        --secundary: $colors->secundary;
        --tertiary: $colors->tertiary;
        --quaternary: $colors->quaternary;
        --card_a: $colors->card_a;
        --card_b: $colors->card_b;
        --card_c: $colors->card_c;
        --card_d: $colors->card_d;
    }

EOT;
