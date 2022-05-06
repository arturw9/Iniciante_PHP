<?php

$a = ['a','b','c','d','d'];
$b = ['b','c','e'];

function result(array $a, array $b)
{
    $uniquea = arrayUnique($a);
    $uniqueb = arrayUnique($b);

    $diff1 = arrayDiff($uniquea,$uniqueb);
    $diff2 = arrayDiff($uniqueb,$uniquea);

    $merge = arrayMerge($diff1,$diff2);

    return $merge;
}

function arrayUnique($array)
{
    $arrayNovo = [];
    // Percorre cada valor do array atual
    foreach($array as $arrayItensAtual) {
        // Percorre cada valor do array modificado
        foreach($arrayNovo as $arrayItensAtualModific) {
            // Verifica se o valor já existe
            if($arrayItensAtual == $arrayItensAtualModific) {
                // 2 laços aninhados deve pular.
                continue 2;
            }
        }
        // Array novo recebe cada valor unico
        $arrayNovo[] = $arrayItensAtual; // agora a varivel $b é $arrayNovo


    }
    return $arrayNovo;
}

function arrayDiff(array $first, array $second)
{
    $diff = [];
    foreach($first as $value)
    {
        if(!in_array($value, $second))
        {
            $diff[] = $value;
        }
    }
    return $diff;
}

function arrayMerge($a, $b)
{
    return [...$a, ...$b];

}

var_dump(result($a, $b));