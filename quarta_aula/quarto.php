<?php

$n = readline("Digite um numero inteiro: ");
$f = 1;

function fatorial($n, $f) {
    for($i = 1; $i <= $n; $i++)
    $f *= $i;
    echo $f;
}

fatorial($n, $f);

?>