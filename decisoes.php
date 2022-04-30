<?php

$idade = 20;

echo "Você só pode entrar se for maior que 18 anos".PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos.".PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";