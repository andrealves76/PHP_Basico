<?php
/* Parecido com o comando while, a diferença é que a condição é testada no final do bloco
e o código é executado pelo menos uma vez */

$i= 0;
do {
  $i ++;
  if ($i ==10) {
    break; // para o encremento de uma unidade.
  }
  echo "$i é menor que 10" . PHP_EOL;
} while ($i <10);
 ?>
