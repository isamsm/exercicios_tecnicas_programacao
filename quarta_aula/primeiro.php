<?php

$n = readline("Digite um numero inteiro: ");

function contagem($n) {
    for($i = $n;  $i >= 0; $i--) {
        echo('
        ' . $i);
    }
}

contagem($n);

?>