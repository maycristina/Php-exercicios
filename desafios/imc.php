<?php

$peso = 55;
$altura = 1.62;

$imc = $peso / ($altura * $altura);



if ( $imc  < 18) {
    echo "Muito abaixo do peso";
} 

else if ($imc < 25) {
    echo "Peso normal";
}

else {
    echo "Peso acima";
}