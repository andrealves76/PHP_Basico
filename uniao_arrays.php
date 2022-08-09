<?php

$alunos2021 = [
    'Maria',
    'João',
    'Rafael',
    'Carlos',
    'Manoel'
];
$novosAlunos= [
    'Lucas',
    'Bruna',
    'Cristina',
    'Deyse',
    'Leandro',
    'Joana'
];

$alunos2022 = array_merge($alunos2021,$novosAlunos); //'array_merge' adiciona o novo array no fim.
var_dump($alunos2022);

/*Alternativa correta! Já o array_merge tem 2 comportamentos. Com strings como chaves,
 em caso de chaves duplicadas, ele sobrescreve os valores dos primeiros arrays com os valores 
 das mesmas chaves dos arrays posteriores. Já em caso de chaves numéricas ele simplesmente adiciona os
  elementos dos arrays posteriores ao final dos arrays anteriores.
  */