<?php

$n1 = readline('Informe a primeira nota: ');
$n2 = readline('Informa a segunda nota: ');

do {
    $n1 = readline('Informe a primeira nota: ');
    $n2 = readline('Informa a segunda nota: ');
} while ($n1 < 0 || $n1 > 10 || $n2 < 0 || $n2 > 10);

$media = ($n1 + $n2) / 2;
echo($media);

?>