<?php

$nome = 'André Pereira Silva';

/*
$ehDaFamilia = str_contains($nome,'Alves'); // "str_contains' verifica se uma string existe em um conjunto de strings.

if ($ehDaFamilia) {
    echo "$nome é da minha familia." . PHP_EOL;
}else{
    echo "$nome não é da minha familia." . PHP_EOL;
}
*/
$url = 'https://alura.com.br';
var_dump(str_ends_with($url, '.br')); // verifica o fim de uma string dentro de outra. >> saída verdadeiro

var_dump(str_starts_with('http://alura.com.br', 'https')); // verifica o inicio de uma string dentro de outra. >> saída falso