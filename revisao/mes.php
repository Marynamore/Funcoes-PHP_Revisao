<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Inteiro</title>
</head>
<body>
    <div>
        <span>
            Faça uma função que leia um valor inteiro entre 1 e 12 e informe o mês correspondente caso o número seja fora deste intervalo, informe que este número não existe como mês válido!
        </span>
        <?php 
            //Capturando os dados do formulário retro alimentado
            $valor1 = $_GET['v1'] ?? 0; 
            // Usando o operador de coalescência nula para definir o valor padrão como 0 se não houver valor enviado
        
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

                // Array com os nomes dos meses
                $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

                // Verificando se o número está no intervalo de 1 a 12
                if ($valor1 >= 1 && $valor1 <= 12){
                    echo $valor1.': ';
                    echo $meses[$valor1-1];
                    // Mostrando o mês correspondente com base no índice do array (subtraindo 1 do valor digitado)

                } else {
                    echo 'Não existe mês com esse número!';
            }
            }

            $resultado = mes($valor1);
        ?>
    </section>
</body>
</html>