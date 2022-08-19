<?php

$email = 'hera@gmail.com';
$nome = 'André Pereira Alves';

// $posicaoArroba = 4; buscando posição da @ manualmente
$posicaoArroba = strpos($email,'@',0);


//echo substr($email,0, $posicaoArroba) . PHP_EOL;
//echo substr($email,$posicaoArroba +1 ) . PHP_EOL;

var_dump(explode(' ',$nome));