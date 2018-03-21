<?php

function  ft_split($s1)
{
    $array = array_filter(explode(" ", $s1));
    sort($array);
    return  $array;
}

?>

