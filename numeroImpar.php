<?php
// Criar um algoritmo que verifica os números ímpares de 0 a 100 e imprime na tela somente os ímpares.

$i = 0;

while ($i < 100) {
  $i++;
  if ($i % 2 != 0) {
    echo "O número $i é um número ímpar" . PHP_EOL;
  }

}
 ?>
