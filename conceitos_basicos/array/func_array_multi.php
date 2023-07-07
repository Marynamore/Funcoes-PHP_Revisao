<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional<</title>
</head>
<body>
    <h1 style="color:darkblue"; align="center">Função do Array Multidimensional!!</h1>
    <hr>
    <center>
        <?php
            // Definindo um array multidimensional de notas
            $notas = array();
            $notas["Ana"] = array(9, 7, 8, 5);
            $notas["Ricardo"] = array(3, 8, 10, 1);
            $notas["Beltrano"] = array(8, 3, 7, 9);
            
            // Exibindo o array completo usando print_r()
            echo "<pre>";
            print_r($notas);
            echo "</pre>";
            
            // Iterando sobre o array multidimensional
            foreach ($notas as $indice => $valor) {
                echo "As notas de $indice são:";
                echo " $valor[0], $valor[1], $valor[2], $valor[3]";
                echo "<br>";
                
                // Iterando sobre o array de notas específico
                foreach ($valor as $indice2 => $valor2) {
                    echo "$valor2 ";
                }
                echo "<br>";
            }
        ?>
    </center>      
</body>
</html>
