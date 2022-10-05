<?php

    $colors = $configs->institutional->colors;

    return <<<EOT

    :root {
        --primary: $colors->primary;
        --secundary: $colors->secundary;
        --tertiary: $colors->tertiary;
        --quaternary: $colors->quaternary;
    }

EOT;
