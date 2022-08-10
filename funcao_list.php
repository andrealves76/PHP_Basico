<?php
/*
$dados = ['Alexandre', 23, 9.5]; // valores sem soltos, sem sentido.

$nome = $dados[0];
$idade = $dados[1];
$nota = $dados[2];

//Usando a função 'list'.

list($nome,$idade,$nota)= $dados;

var_dump($nome,$idade,$nota);
*/
$contas = [
    [
        'titular' => 'Vinicius Dias',
        'saldo' => 100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];
//Como eu posso me aproveitar da função list para ter as variáveis $titular e $saldo definidas?

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais" . PHP_EOL;
}
