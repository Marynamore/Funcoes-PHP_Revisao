<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional<</title>
</head>
<body>
    <h1 style="color:darkblue"; align="center">!! A funcao do array multidimensional !! </h1>
    <hr>
    <center>
        <?php
            $notas = array();
            $notas["Ana"] = array(9,7,8,5);
            $notas["Ricardo"] = array(3,8,10,1);
            $notas["Beltrano"] = array(8,3,7,9);
            echo"<pre>";
            print_r($notas);
            echo"</pre>";
            foreach ($notas as $indice => $valor){
                echo " As notas de $indice sao:";
                echo " $valor[0], $valor[1], $valor[2], $valor[3]";
                echo "<br>";
                foreach($valor as $indice2 => $valor2){
                    echo "$valor2";
                }
                echo "<br>";
            }
        ?>
    </center>      
</body>
</html>
