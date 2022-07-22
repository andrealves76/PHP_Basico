<?php
/* O comando 'continue' avança o código para o próximo ciclo de repetição
sem terminar o ciclo atual*/

for ($i=0; $i < 10 ; $i++) {
  if ($i == 4) {  //O numero 4 será ignorado
    continue;
  }
  echo "$i" . PHP_EOL;
}
