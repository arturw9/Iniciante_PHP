<?php
$array = array("a"=>"Artur","b"=>"Fidelis","c"=>"Silva","d"=>"PHP","e"=>"PHP", "f"=>"CoderFOX");
$a = ["a","b","c","d","d"];
$b = ["b","c", "e"];
$arrayNovo = []; // Array novo

// Percorre cada valor do array atual
foreach($a as $arrayItensAtual) {
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
var_dump($arrayNovo);
?>