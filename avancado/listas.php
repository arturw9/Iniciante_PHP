<?php

$idadeList = [21, 23, 22, 48, 55 ,14];

list($idadeArtur, $idadeVinicius, $idadeMaria) = $idadeList;

$idadeList[count($idadeList)] = 20;

foreach ($idadeList as $idade) {
    echo $idade.PHP_EOL;
}