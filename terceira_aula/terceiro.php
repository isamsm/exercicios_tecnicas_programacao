<?php

$n_alunos = readline('Informe o número de alunos: ');

for ($i = 1; $i <= $n_alunos; $i++) {
    $notas[$i] = readline('Informe a nota do aluno ' . $i . ': ');
    $total = array_sum($notas);
    $media = $total / $n_alunos;
}

echo($media);

?>