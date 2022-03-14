<?php

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

$contasCorrentes['123.434.789-13'] = [
    'titular' => 'Claudio',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}
