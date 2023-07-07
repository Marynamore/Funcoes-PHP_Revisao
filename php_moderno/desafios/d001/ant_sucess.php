<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Resultado</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <h1>Resultado Final</h1>
        <div>
            <p>
                <?php 
                    $n1 = $_REQUEST["n1"] ?? 0;

                    if($n1){
                        echo "
                            O número escolhido foi <strong>$n1</strong> <br>
                            O seu <em> antecessor </em> é ".($n1 - 1)."<br>
                            O seu <em> sucessor </em> é ".($n1 + 1)."
                        ";
                    }else{
                        echo "Informação Inválida";
                    }

                ?>
            </p>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>
</html>


