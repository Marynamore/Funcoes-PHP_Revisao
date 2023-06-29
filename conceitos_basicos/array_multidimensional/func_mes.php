<?php
    if(empty($_POST['submit'])){
        echo "voce nao digitou nada";
    }else{
        $valor = $_POST['valor'];
        
        if($valor == 1){
            echo "Janeiro";
        }elseif ($valor == 2) {
            echo "Fevereiro";
        }elseif($valor == 3){
            echo "Março";
        }elseif($valor == 4){
            echo "Abril";
        }elseif ($valor == 5){
            echo "Maio";
        }elseif ($valor == 6) {
            echo "Junho";
        }elseif($valor == 7) {
            echo "Julho";
        }elseif ($valor == 8){
            echo "Agosto";
        }elseif ($valor == 9){
            echo "Setembro";
        }elseif ($valor == 10){
            echo "Outubro";
        }elseif($valor == 11){
            echo "Novembro";
        }elseif ($valor == 12){
            echo "Dezembro";
        }else {
            echo "Mês inválido";
        }
            
    }
