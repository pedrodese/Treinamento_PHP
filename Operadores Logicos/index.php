<?php

//E == && , and

$nome = 'Pedro';
$taVivo = false; 


var_dump ($nome && $taVivo).PHP_EOL;//neste caso os dois valores tem que ser verdadeiros pois se utiliza o E para fazer uma dupla validação;

//OU == ||, OR

$nome2 = 'Pedro';
$idade = 20;

var_dump($nome2 == 'Pedro' || $idade == 21).PHP_EOL;//neste caso como estamos usando o OU apenas UMA das duas informações tem que possuir o valor true


//negação == !


$name = true;
$isAlive = false;

var_dump($name and !$isAlive).PHP_EOL;//retorna true por conta de negação, a partir do momento que você nega algo, aquilo que era true passa a ser false e vice versa.


//OUTRO EXEMPLO DE NEGAÇÃO

if(!$isAlive){
    echo 'Está morto'.PHP_EOL;
}

//SE SENAO SE E SENAO

$idade = 18;

if($idade > 18){
    echo 'Você é de maior'.PHP_EOL;
}
elseif($idade == 18){
    echo ' Você tem 18 anos'.PHP_EOL;           //VALIDA SEMPRE A PRIMEIRA INFORMAÇÃO QUE ESTÁ CORRETA.
}
else{
    echo 'Você é de menor'.PHP_EOL;
}


?>