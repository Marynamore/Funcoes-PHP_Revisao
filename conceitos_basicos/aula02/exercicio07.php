<?php
//função sem parametro e sem retorno
function saudar()
{
    echo "Boa tarde !";
}
function saudarNome($n)
{
    echo"<br>";
    echo "Oi $n !";
    echo "<br>";        
}
function saudarFulano($n)
{
    echo "<br>";
    echo "Ola $n!";
    echo "<br>";
}
function somar($x,$y){
    $soma = $x+$y;
    echo "<br>";
    echo "$x + $y é igual a $soma";
    echo "<br>";
}
function produto($x,$y){
    $produto = $x * $y;
    return $produto;
}

function media($x,$y,$z){
    $media = ($x+$y+$z)/3;
    return $media;
}
