<?php
$a = ["a","b","c","d","d"];
$b = ["b","c", "e"];

function arrayIntersect($arraya, $arrayb){
    $ig = [];
// Percorre cada valor do primeiro array
    foreach($arraya as $item){
        // var i receber o valor de cada key da var b
        $i = array_search($item, $arrayb);
        if($i !== false) {
            $ig[] = '('. $item .', '. $arrayb[$i] .')';
            // Destrói a variável especificada
            unset($arrayb[$i]);
        }
    }

    return $ig;
}

var_dump(arrayIntersect($a, $b));