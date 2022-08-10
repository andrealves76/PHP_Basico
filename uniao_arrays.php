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
//var_dump($alunos2022);

// Adicionar elementos no array

array_push($alunos2022,'Alice','Bob'); // "array_push" para adicionar mais de um elemento
//var_dump($alunos2022);
$alunos2022[]= 'Bill'; // Adiciona somente um elemento
//var_dump($alunos2022);
array_unshift($alunos2022,'Bianca','Beatriz'); //"array_unshift adiciona elementos no inicio do array.
var_dump($alunos2022);
