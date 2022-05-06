<?php

$a = ['a','b','c','d','d'];
$b = ['b','c','e'];

function result(array $a, array $b)
{
    $uniquea = array_unique($a);
    $uniqueb = array_unique($b);

    $diff1 = array_diff($uniquea,$uniqueb);
    $diff2 = array_diff($uniqueb,$uniquea);

    $merge = array_merge($diff1,$diff2);

    return $merge;
}

var_dump(result($a, $b));