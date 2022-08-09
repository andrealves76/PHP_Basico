<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'Joao' => 8,
    'Ana' => 7,
    'Roberto' => 9,
    'Maria' => 8,
    'Carlos' => 8
];
$notasBimestre2  = [
    'Joao' => 8,
    'Ana' => 7,
    'Roberto' => 9,
    'Maria' => 8,
    'Vinicius' =>7,
];
var_dump(array_diff($notasBimestre1,$notasBimestre2)); /* Verifica os elementos (verifica os valores das chaves) que estão no primeiro array 
e não constam nos demais */

var_dump(array_diff_key($notasBimestre1,$notasBimestre2));// verifica os elementos usando as chaves como parametro