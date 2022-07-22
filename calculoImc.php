<?php
//Criando um pequeno algoritmo para calcular o IMC.

$peso = 70;
$altura = 1.78;
$imc = $peso / ($altura **2);
if ($imc < 18.5) {
  echo number_format($imc,2) . " Seu peso está abaixo do normal." . PHP_EOL;
}
elseif ($imc <= 24.9) {
  echo number_format($imc,2) . " Seu peso está normal." . PHP_EOL;
}
elseif ($imc <= 29.9) {
  echo number_format($imc,2) . " Você está com sobrepeso." . PHP_EOL;
}
elseif ($imc >= 30  and $imc < 40) {
  echo number_format($imc,2) . " Você está com obesidade." . PHP_EOL;
}
else{
  if ($imc >=40) {
    echo number_format($imc,2) . " Obesidade Grau II." . PHP_EOL;
  }
}
 ?>
