<?php

function fibonacci($n) {
  if ($n <= 0) {
    return 0;
  } elseif ($n == 1) {
    return 1;
  } else {
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

// Exemplo de uso:
for ($i = 0; $i < 10; $i++) {
  echo fibonacci($i) . " ";
}

?>