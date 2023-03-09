<?php

$status = readline("Qual seu status de relacionamento? ");;

switch($status) {
    case 's': 
        echo 'Solteiro';
        break;
    case 'c':
        echo 'Casado';
        break;
    case 'd':
        echo 'Divorciado';
        break;
    case 'v':
        echo 'Viuvo';
        break;
    default:
        echo 'Outro';
}

?>