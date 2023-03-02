<?php

$status = 'j';

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