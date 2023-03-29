<?php

$notas = array();

for($i = 1; $i <= 10; $i++) {
    $n = readline("Digite a nota do aluno $i: ");
    array_push($notas, $n);
}

$soma = array_sum($notas) / count($notas);

echo "A média das notas dos alunos é de $soma";

?>