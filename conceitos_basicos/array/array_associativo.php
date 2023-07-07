<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo Mês</title>
</head>
<body>
    <div>
        <h3>Insira um número de 1 a 12 e verifique o mês correspondente</h3>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Insira um número inteiro:</label>
            <input type="number" name="valor" id="valor" min="1" max="12" required><br><br>
            <input type="submit" name="submit" value="Verificar">
        </form>
    </div>
    <section>
        <h2>Resultado</h2>
        <?php
            if(!empty($_POST['submit'])){
                $valor = $_POST["valor"];
                
                //array associativo 
                $meses = array(
                    1 => 'Janeiro',    // Chave: 1, Valor: 'Janeiro'
                    2 => 'Fevereiro',  // Chave: 2, Valor: 'Fevereiro'
                    3 => 'Março',      // Chave: 3, Valor: 'Março'
                    4 => 'Abril',      // Chave: 4, Valor: 'Abril'
                    5 => 'Maio',       // Chave: 5, Valor: 'Maio'
                    6 => 'Junho',      // Chave: 6, Valor: 'Junho'
                    7 => 'Julho',      // Chave: 7, Valor: 'Julho'
                    8 => 'Agosto',     // Chave: 8, Valor: 'Agosto'
                    9 => 'Setembro',   // Chave: 9, Valor: 'Setembro'
                    10 => 'Outubro',   // Chave: 10, Valor: 'Outubro'
                    11 => 'Novembro',  // Chave: 11, Valor: 'Novembro'
                    12 => 'Dezembro'   // Chave: 12, Valor: 'Dezembro'
                );

                if (isset($meses[$valor])) {

                    echo "O número $valor corresponde ao mês de ".$meses[$valor];
                    
                } else {
                    echo "Mês Inválido";
                }           
            }
        ?>
    </section>
</body>
</html>
