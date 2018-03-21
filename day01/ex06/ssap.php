#!/usr/bin/php
<?php
$res = array();
unset($argv[0]);
foreach ($argv as $value) {
    $tmp = array_filter(explode(" ", $value));
    foreach ($tmp as $value2)
        $res[] = $value2;
}
sort($res);
foreach ($res as $value) {
    echo "$value\n";
}
?>