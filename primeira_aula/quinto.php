<?php

$valor_real = 2000;
$cotacao_dolar = 5.22;
$valor_dolar = $valor_real / $cotacao_dolar;

echo 'O valor de ' . $valor_real . ' reais em dólar, com a cotação atual de ' . $cotacao_dolar . ' é de ' . number_format($valor_dolar);

?>