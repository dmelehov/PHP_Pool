<?php

function ft_is_sort($arr1)
{
    $arr2 = $arr1;
    sort($arr2);
    if (array_diff_assoc($arr1, $arr2) == NULL)
        return true;
    $arr2 = $arr1;
    rsort($arr2);
    if (array_diff_assoc($arr1, $arr2) == NULL)
        return true;
    return false;
}

?>