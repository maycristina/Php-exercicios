<?php

$conta1 = [
    'titular' => 'vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 1000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];
$conta1['titular'];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i <count($contasCorrentes); $i++) {
    echo $contasCorrentes [$i] ['titular'].PHP_EOL;
}