<?php

$paper = readline("Número de papeis: ");
$price;

$paper > 100 ? $price = 0.20 : $price = 0.25;

echo $paper . " folhas custaram um total de R$" . $price . " reais";

?>