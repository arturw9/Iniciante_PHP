<?php

require_once 'funcoes.php';

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

$contasCorrentes[123455789910] = sacar($contasCorrentes[123455789910], 500);
$contasCorrentes[123456789819] = sacar($contasCorrentes[123456789819], 500);
$contasCorrentes[123456789914] = depositar($contasCorrentes[123456789914], 100);

unset($contasCorrentes[123456789914]);

titularComLetrasMaiusculas($contasCorrentes[123455789910]);


foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
    "$cpf $titular $saldo"
    );
}
