<?php

    $output = '';

    foreach ($configs->structure as $key => $page):
        if(in_array($page->type, ['galery']) ) continue;

        $output .= <<<EOT

#$page->alias {
	background: url("images/overlay.png"), url(/public/storage/images/$page->alias.jpg);
    background-size: cover;
    background-attachment: fixed, fixed;
    background-position: top left, bottom center;
    background-repeat: repeat, no-repeat;
}

EOT;
    endforeach;

    return $output;
