<?php

$idade = 14;

echo "voce SÓ pode entrar se for maior que 18 anos".  PHP_EOL;
echo "você tem $idade anos" . PHP_EOL;
if ($idade == 18 or $idade > 18) {
     echo 'Pode entrar.';
}else {
    echo 'Não pode entrar.';
}