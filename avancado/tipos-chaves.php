<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c'
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}

//Chaves em php só podem ser usadas como tipo inteiro ou numero