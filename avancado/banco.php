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
//
//echo "<ul>";
//foreach ($contasCorrentes as $cpf => $conta) {
//    exibeConta($conta);
//}
//echo "</ul>";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

<dl>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
    <dt>
        <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>
    <dd>
        Saldo: <?php echo $conta['saldo']; ?>
    </dd>
    <?php } ?>
</dl>
</body>
</html>
