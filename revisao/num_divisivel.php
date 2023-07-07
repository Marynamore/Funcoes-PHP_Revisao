<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Divisiveis</title>
</head>

<body>
    <div>
        <span>Crie uma função em PHP que receba um valor e informe se ele é divisível por 10, por 5, por 2 ao mesmo tempo ou se não é divisível por nenhum destes.</span>
        
        <h3>Verifique se o número é divisível por 10, 5 ou 2</h3>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Insira um número inteiro:</label>
            <input type="number" name="n1" id="n1"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <section id="resultado"> 
        <h2>Resultado da Verificação de Divisibilidade</h2>

        <?php 
        // Verifica se o número foi inserido antes de executar a função
            if(isset($_GET["n1"])) {

                $n1=$_GET["n1"];

                function divisao ($n1){

                    if($n1 % 10 == 0){
                        echo $n1.': ';
                        echo 'É divisível por 10'.'<br><br>';

                    }else{
                        echo $n1.': ';
                        echo 'Não é divisível 10'.'<br><br>';

                    }
                    if($n1 % 5 == 0){
                        echo $n1.': ';
                        echo 'É divisível por 5'.'<br><br>';

                    }else{
                        echo $n1.': ';
                        echo 'Não é divisível 5'.'<br><br>';

                    } 
                    if($n1 % 2 == 0){
                        echo $n1.': ';
                        echo 'É divisível por 2'.'<br><br>';

                    }else{
                        echo $n1.': ';
                        echo 'Não é divisível 2'.'<br><br>';

                    }
                }
                $resultado = divisao($n1);
            }
        ?>
    </section>
</body>
</html>
