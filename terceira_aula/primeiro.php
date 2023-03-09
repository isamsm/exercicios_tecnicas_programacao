<?php

$num; $digito; $divisor = 1;

$num = readline("Digite um numero inteiro: ");

while ($num / $divisor % 10 != 0) {
    $digito = ($num / $divisor) % 10; 
    $divisor *= 10;
}

?>