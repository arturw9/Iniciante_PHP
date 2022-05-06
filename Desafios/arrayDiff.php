<?php
$a = ["a","b","c","d","d"];
$b = ["b","c", "e"];

function arrayDiff($arraya, $arrayb)
{

    $diferentes = [];
    foreach ($arraya as $item) {
        $i = array_search($item, $arrayb);
        if ($i !== false) {
            unset($arrayb[$i]);
        } else {
            $diferentes[] = $item;
        }
    }

    $diferentes += $arrayb;

    $diferentes1 = [];
    foreach ($arrayb as $item) {
        $i = array_search($item, $arraya);
        if ($i !== false) {
            unset($arraya[$i]);
        } else {
            $diferentes1[] = $item;
        }
        $diferentes1 += $arraya;
    }



    return $diferentes1+$diferentes;
}

var_dump(arrayDiff($a, $b));
