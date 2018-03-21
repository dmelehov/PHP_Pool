#!/usr/bin/php
<?php

if ($argc != 4) {
    echo "Incorrect Parameters\n";
    exit();
}
$act = trim($argv[2], " \t");
if ($act == "*")
    echo trim($argv[1], " \t") * trim($argv[3], " \t");
else if ($act == "+")
    echo trim($argv[1], " \t") + trim($argv[3], " \t");
else if ($act == "-")
    echo trim($argv[1], " \t") - trim($argv[3], " \t");
else if ($act == "/")
    echo trim($argv[1], " \t") / trim($argv[3], " \t");
else if ($act == "%")
    echo trim($argv[1], " \t") % trim($argv[3], " \t");
echo "\n";

?>