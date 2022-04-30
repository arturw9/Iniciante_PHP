<?php

function sacar($conta, $valorASacar)
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem($mensagem)
{
    echo  $mensagem.PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

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


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf. " ".$conta['titular']. " ".$conta['saldo']);
}
