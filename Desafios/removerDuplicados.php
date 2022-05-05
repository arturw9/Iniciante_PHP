<?php
$array = array("a"=>"Artur","b"=>"Fidelis","c"=>"Silva","d"=>"PHP","e"=>"PHP", "f"=>"CoderFOX");
$arrayNovo = []; // Array novo

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
    $arrayNovo[] = $arrayItensAtual;
}
var_dump($arrayNovo);
?>