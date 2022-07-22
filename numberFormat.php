<?php

$valor = 12345.678;
$var1 = number_format($valor , 1); // imprime no formato americano
$var2 = number_format($valor,2,',','.'); // imprime no formato brasile

echo "$valor" . PHP_EOL;
echo "$var1" . PHP_EOL;
echo "$var2" . PHP_EOL;

 ?>
