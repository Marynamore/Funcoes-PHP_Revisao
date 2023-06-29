<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça uma função que leia um valor inteiro entre 1 e 12 e informe o mês correspondente caso o número seja fora deste intervalo, informe que este número não existe como mês válido</title>
</head>
<body>
    <div>
        <?php 
            //Capturando os dados do formulário retro alimentado
            $valor1 = $_GET['v1'] ?? 0;
        
        ?>
        <h3>Insira um número de 1 a 12 e verifique o mês correspondente</h3>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Insira um número inteiro: </label>
            <input type="number" name="v1" id="v1"><br><br>
            <input type="submit" value="Enviar">   
        </form>
    </div> 
    <section> 
        <h2>Resultado</h2>

        <?php 

            function mes ($valor1){
                $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
                if ($valor1>=1 && $valor1 <=12){
                    echo $valor1.': ';
                echo $meses[$valor1-1];
                } else {
                    echo 'Não existe mês com esse número!';
            }
            }
            $resultado=mes($valor1);
        ?>
    </section>
</body>
</html>