<?php

$main_value = readline('Digite um valor inicial: ');
$tax_value = readline('Digite o valor da taxa em porcentagem: ');
$months = readline('Digite a quantidade de meses: ');

function investment($main_value, $tax_value, $months) {
    if ($months == 0) {
        return $main_value;
    } else {
        return investment($main_value * (1 + $tax_value), $tax_value, $months - 1);
    }
}

$total = investment($main_value, $tax_value, $months);
echo 'O valor total do investimento de ' . $main_value . ' no período de  ' . $months . ' meses, incluindo a taxa de ' . $tax_value . ' é igual a R$' . number_format($total, 2, ',', '.'). PHP_EOL;

?>