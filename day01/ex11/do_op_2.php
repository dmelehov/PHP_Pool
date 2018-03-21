#!/usr/bin/php
<?php
if ($argc != 2) {
    echo "Incorrect Parameters\n";
    exit();
}
$calc = str_replace(" ", "", $argv[1]);
$nb1 = intval($calc);
$act = substr(substr($calc, strlen((string)$nb1)), 0, 1);
$nb2 = substr(substr($calc, strlen((string)$nb1)), 1);
if (!is_numeric($nb1) || !is_numeric($nb2)){
    echo "Syntax Error\n";
    exit();
}
if ($act == "*")
    echo $nb1 * $nb2;
else if ($act == "+")
    echo $nb1 + $nb2;
else if ($act == "-")
    echo $nb1 - $nb2;
else if ($act == "/")
    echo $nb1 / $nb2;
else if ($act == "%")
    echo $nb1 % $nb2;
else
    echo "Syntax Error";
echo "\n";
?>