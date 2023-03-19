<?php

$n = readline("Digite um numero inteiro: ");

function par($n) {
    $n % 2 === 0 ? print($n . ' é um número par!') : print($n . ' é um número impar!');
}

par($n);

?>