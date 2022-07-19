<?php
// Utilizando o comando "switch" para verificar se somente um condição é verdadeira.

$i = "calopsita";

switch ($i) {
  case 'cadelaSrd':
    echo "O pet de estimação é a Hera" . PHP_EOL;
    break;
  case 'cadelaPitbull':
    echo 'O pet de estimação é a Frida' . PHP_EOL;
    break;
    case 'calopsita':
      echo 'O pet de estimação é o Cris' . PHP_EOL;
      break;
  default:
    echo "Não é um dos meus pet's." . PHP_EOL;
    break;
}
 ?>
