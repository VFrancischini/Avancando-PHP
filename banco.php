<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.457.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.556.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

// Sacar
$contasCorrentes['123.457.789-11'] = sacar($contasCorrentes['123.457.789-11'], 500);
$contasCorrentes['123.556.789-12'] = sacar($contasCorrentes['123.556.789-12'], 200);

//Depositar
$contasCorrentes['123.556.789-12'] = depositar($contasCorrentes['123.456.789-10'], 1000);

unset($contasCorrentes['123.556.789-12']);

titularComLetraMaiusculas($contasCorrentes['123.456.789-10']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) {?>
        <dt>
            <h3><?= $conta['titular'];?> - <?= $cpf;?></h3>
        </dt>
        <dd>
            <h4>Saldo: R$ <?= $conta['saldo'];?></h4>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>