#!/usr/bin/php
<?php
while (!feof(STDIN))
{
    echo "Enter a number: ";
    $n = trim(fgets(STDIN));
    if (is_numeric($n))
    {
        if ($n & 1)
            echo "The number $n is odd\n";
        else
            echo "The number $n is even\n";
    }
    else if (!feof(STDIN))
        echo "'$n' is not a number\n";
}
echo "\n";
?>


