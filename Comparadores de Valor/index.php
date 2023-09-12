<?php

//igualdade 
$rodadas == 20;
var_dump(123 == 123).PHP_EOL;//true
var_dump(200 == 201).PHP_EOL;//false
echo (0 == false).PHP_EOL;//true 0 é igual a false e 1 é igual a true
var_dump($rodadas == "20").PHP_EOL;//true pois no PHP ele tem um sinal de estritamente igual que seria === ai neste caso os tipos teriam que ser iguais


//maior ou menor  

$idade = 18;

var_dump($idade < 18).PHP_EOL;//false pois não é menor do que 18
var_dump($idade <= 18).PHP_EOL;//true pois o sinal de <= é que a idade seja menor ou igual a 18
var_dump($idade > 18).PHP_EOL;//false pois a idade não é maior que 18

//diferença

$salario == 1000;
$salarioReal == 1500;

var_dump($salarioReal != $salario).PHP_EOL;//True pois a variavel salario é diferente da variavel salario


?>