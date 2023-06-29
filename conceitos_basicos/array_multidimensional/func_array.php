<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutas = array("Uva", "Maca", "Banana", "Melancia", "limao");
        echo " Lista de frutas : {$frutas[0]}"
        . "{$frutas[1]}, {$frutas[2]} {$frutas[3]}, {$frutas[4]}";
        $frutas[] = "Jaca";
        echo ", {$frutas[5]}";
        $frutas[8] = "Melao";
        $frutas[] = "Morango";
        echo"<br>"
        
        .  print_r($frutas);
        
        $alunos[] = "Joao";
        $alunos[] = "Joaquina";
        $alunos[] = "Silveira";
        $alunos[] = "Silvania";
        $alunos[] = "Luiz";
        $alunos[] = "Luiza";
        $tamanho = count($alunos);
        echo"Lista de alunos :<br>";
        for($indice=0; $indice<$tamanho;$indice++){   
        echo"{$alunos[$indice]}<br>"; 
        }

        $capitais["RN"] = "Natal";
        $capitais["MG"] = "Belo Horizonte";
        $capitais["DF"] = "Brasilia";
        $capitais["AM"] = "Manaus";
        
        $tamanho = count($capitais);
        echo"<br>Lista de capitais :<br>";
        
        foreach ($capitais as $Estado => $capital){
            echo " Capital de $Estado e $capital <br>";
        }
        
        $sorteio= array();
        
        for($num = 0 ; $num<20; $num++ ){
        $sorteio[] = rand(0, 100); 
        }
        echo"<br> Sorteio :<br>";
        foreach ($sorteio as $chave => $valor){
            echo "$valor ";
        }
    ?>
</body>
</html>
