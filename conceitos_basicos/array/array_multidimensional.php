<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>
    <h1>Array Multidimensional</h1>
    <span>
        Um array multidimensional é um array que contém outros arrays como elementos. No caso desse script, há exemplos de array numérico, array associativo e também um exemplo de array gerado aleatoriamente.
    </span>
    <?php
        // Exemplo de array numérico
        $frutas = array("Uva", "Maca", "Banana", "Melancia", "limao");
        
        // Exibindo elementos do array
        echo " Lista de frutas : {$frutas[0]}"
        . "{$frutas[1]}, {$frutas[2]} {$frutas[3]}, {$frutas[4]}";
        
        // Adicionando elementos ao array
        $frutas[] = "Jaca";
        echo ", {$frutas[5]}";
        
        // Adicionando elemento em índice específico
        $frutas[8] = "Melao";
        $frutas[] = "Morango";
        
        echo "<br>" . print_r($frutas); // Exibindo o array usando print_r()
        
        // Exemplo de array numérico com elementos adicionados individualmente
        $alunos[] = "Joao";
        $alunos[] = "Joaquina";
        $alunos[] = "Silveira";
        $alunos[] = "Silvania";
        $alunos[] = "Luiz";
        $alunos[] = "Luiza";
        
        $tamanho = count($alunos); // Obtendo o tamanho do array usando count()
        
        echo "Lista de alunos :<br>";
        
        // Iterando sobre o array e exibindo os elementos
        for ($indice = 0; $indice < $tamanho; $indice++) {
            echo "{$alunos[$indice]}<br>";
        }
        
        // Exemplo de array associativo (chave-valor)
        $capitais["RN"] = "Natal";
        $capitais["MG"] = "Belo Horizonte";
        $capitais["DF"] = "Brasilia";
        $capitais["AM"] = "Manaus";
        
        $tamanho = count($capitais);
        
        echo "<br>Lista de capitais :<br>";
        
        // Iterando sobre o array associativo usando foreach
        foreach ($capitais as $Estado => $capital) {
            echo " Capital de $Estado e $capital <br>";
        }
        
        // Exemplo de array gerado aleatoriamente
        $sorteio = array();
        
        for ($num = 0; $num < 20; $num++) {
            $sorteio[] = rand(0, 100); // Adicionando um número aleatório ao array
        }
        
        echo "<br> Sorteio :<br>";
        
        // Iterando sobre o array de sorteio e exibindo os números
        foreach ($sorteio as $chave => $valor) {
            echo "$valor ";
        }
    ?>
</body>
</html>
