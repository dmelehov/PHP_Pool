#!/usr/bin/php
<?php

function	ft_split($s1) {
    $array = array_filter(explode(" ", $s1));
    return $array;
}

if ($argc > 1)
{
    $arr = array_values(ft_split($argv[1]));
    foreach ($arr as $key => $value) {
        if ($key != 0)
            echo "$value ";
    }
    echo "$arr[0]\n";
}
?>