<?php
$a = array("Artur", "Leonardo", "Henrique", "Helio", "Franklyn");
$tamanho = sizeof($a);
$arrayNovo = [];

echo "Array invertido: ".PHP_EOL;

for($i=$tamanho-1; $i>=0; $i--){
    $arrayNovo = $a[$i].PHP_EOL;
    echo $arrayNovo;
}

?>