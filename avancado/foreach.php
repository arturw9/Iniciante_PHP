<?php

$contasCorrentes = [
    123456789914 => $conta1 = [
        'titular' => 'Artur',
        'saldo' => 1000
    ],
    123456789819 => $conta2 = [
        'titular' => 'Vinicius',
        'saldo' => 2000
    ],
    123455789910 => $conta3 = [
        'titular' => 'Maria',
        'saldo' => 3000
    ],
];

$contasCorrentes[123456789999] = [
    'titular' => 'Claudia',
    'saldo => 2000'
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'].PHP_EOL;
}

