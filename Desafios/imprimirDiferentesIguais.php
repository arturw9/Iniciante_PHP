<?php
$a = [1,2,3,4,5];
$b = [1,3,5,6,7];

$ig = [];
$dif = [];
// Percorre cada valor do primeiro array
foreach($a as $item){
    // var i receber o valor de cada key da var b
    $i = array_search($item, $b);
    if($i !== false){
        $ig[] = '('. $item .', '. $b[$i] .')';
        // Destrói a variável especificada
        unset($b[$i]);
    }else{
        $dif[] = $item;
    }
}

$dif += $b;

var_dump($ig);
//var_dump($dif);