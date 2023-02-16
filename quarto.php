<?php

$valor = 20;
$desconto = 0.5;
$valor_desconto = ($valor * $desconto) / 100;
$valor_final = $valor - $valor_desconto;

echo 'O valor total do item custando ' . $valor . ' com o desconto de ' . $desconto . ' sendo descontados '. $valor_desconto . ' é igual a ' . $valor_final;

?>