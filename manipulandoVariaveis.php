<?php

/*
is_array(): Verifica se uma dada variável é um array.
is_bool(): Verifica se uma dada variável é boolean.
is_countable(): Verify that the contents of a variable is an array or an object implementing Countable
is_float(): Verifica se a dada variável é do tipo ponto flutuante.
is_int(): Verifica se a dada variável é do tipo inteiro.
is_null(): Verifica se uma dada variável é null.
is_numeric(): Verifica se a dada variável é numérica.
is_string(): Verifica se a dada variável é do tipo string.
isset(): Verifica se a variável é definida.
 */

$a = 1;
$b = "b";
$c = "";
$d = [];

if (is_array($d)){
    echo "É array";
} else
    echo "Não é array";
