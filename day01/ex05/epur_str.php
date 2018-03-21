#!/usr/bin/php
<?php

if ($argc == 2) {
    $arr = array_filter(explode(" ", $argv[1]));
    $ans = "";
    foreach ($arr as $value)
        $ans .= $value." ";
    echo trim($ans)."\n";
}
else
    echo "Usage: ./epur_str [Please input only one argument]\n";

?>
