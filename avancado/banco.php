<?php

function exibeMensagem($mensagem)
{
    echo  $mensagem.PHP_EOL;
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
if(5000 > $contasCorrentes[123455789910]['saldo']) {
    exibeMensagem("Você não pode sacar");
} else {
    $contasCorrentes[123455789910]['saldo'] -= 5000;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf. " ".$conta['titular']. " ".$conta['saldo']);
}
