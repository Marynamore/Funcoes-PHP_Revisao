<?php

header("Content-Type: text/html; charset=Utf-8");
# declarando uma variável do tipo string.
$texto = "Hoje é quarta feira";

#declarando uma variável do tipo inteiro.
$inteiro = 5985;

#declarando uma variável do tipo ponto flutuante.
$flutuante = 10.456;

# declarando variáveis do tipo booleano.
$b1 = true;
$b2 = false;

# declarando uma variável do nulo
$nulo = null;

# declarando uma variável arry.
$matriz = array(1,2, 'abc', 11.22);

echo '<pre>';
var_dump($texto, $inteiro, $flutuante, $b1, $b2, $nulo, $matriz);
