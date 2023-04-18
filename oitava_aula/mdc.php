<?php

$a = readline("Escolha um primeiro valor: ");
$b = readline("Escolha um segundo valor: ");

function calculaMDC($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return calculaMDC($b, $a % $b);
    }
}

$mdc = calculaMDC($a, $b);
echo 'O mdc entre ' . $a . ' e ' . $b . ' é igual a ' . $mdc;

?>