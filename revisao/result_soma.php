<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Soma</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="valor1">Valor1 </label><br>
        <input type="number" name="n1">
        <label for="valor2">Valor2 </label><br>
        <input type="number" name="n2">
        <input type="submit" value="Calcular">
    </form>

    <?php
        if(isset($_POST["n1"], $_POST["n2"])){
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];

            function somar($n1, $n2){
                $resultado = $n1 + $n2; 

                if ($resultado > 20){
                    $resultado = $resultado + 8; 
                    // Se o resultado for maior que 20, adiciona 8 ao resultado

                    echo '<br>'; 
                } else {
                    $resultado = $resultado - 5; 
                    // Se o resultado for menor ou igual a 20, subtrai 5 do resultado
                    echo '<br>';
                }

                return $resultado;
            }

            $valor1 = somar($n1, $n2); 
            // Chama a função somar passando os valores $n1 e $n2 e armazena o resultado na variável $valor1

            function parOUimpar($resultado){
                if ($resultado % 2 == 0) {

                    return "PAR"; 
                    // Se o resultado for divisível por 2 (resto 0), retorna "PAR"
                } else {

                    return "ÍMPAR"; 
                    // Caso contrário, retorna "ÍMPAR"
                }
            }

            $valor2 = parOUimpar($valor1); 
            // Chama a função parOUimpar passando o valor $valor1 e armazena o resultado na variável $valor2

            echo "Resultado: $valor1<br>";
            echo "Par ou Ímpar: $valor2"; 
        }
    ?>
</body>
</html>
