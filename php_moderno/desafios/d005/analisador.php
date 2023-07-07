<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Analisando Números Real</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <h1>Analisador de Número Real</h1>
        <div>
            <?php 

                $numReal = $_POST['numReal'] ?? 0;
                $int = (int) $numReal;
                $fracao = $numReal - $int; 
                // 3,14 == int 3 == 3,14 (numero original) - 3 (parte inteira dele) == 0,14

                echo "    
                <p>Analisando o número <strong>".number_format($numReal,3,",",".")."</strong> informado pelo usúario:</p>
                <ul>
                    <li>A parte inteira do número é <strong>".number_format($int,0,',','.')."</strong></li>
                    <li>A parte fracionária do número é <strong>".number_format($fracao,3,',','.')."</strong></li>
                </ul>
                ";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>
</html>

