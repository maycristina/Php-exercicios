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


$contasCorrentes = [
    12345678910 => [
        'titular' => 'Maria',
        'saldo' => 100000
    ],
    12365498711 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    781365498715 => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

echo $contasCorrentes [12365498716] = [
    'titular' => 'claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL; 
} 
//Para cada uma conta exibida em conta, exibimos seu titular.
//Não é necessário indicar o indice, se nao a linguagem executa de forma automática
//Para destinguir uma da outra apenas repita a estrutura dentro do foreach



