<?php

$pessoa = [];// no PHP não é necessario estipular quantos valores terá o Array.

$pessoa['nome'] = 'Pedro Henrique';
$pessoa['idade'] = 20;
$pessoa['peso'] = 99;


var_dump($pessoa);


$pessoa2 = [
    'nome' => "Pedro",
    'idade' => 20,              //jeito diferente de inicializar um Array
    'peso' => 99
];

var_dump($pessoa2)

?>