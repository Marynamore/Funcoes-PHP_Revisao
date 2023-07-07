<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Sorteador</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <h1>Trabalhando com Números Aleatórios</h1>
        <h3>Gerando um número aleatório entre 0 e 100...</h3>
        <div>
            <?php 

                $num = mt_rand(0,100);
                //rand() = 1951 - (Algoritmo) Linear Congrential Generator
                //mt_rand() = 1997 - (Algoritmo) Mersenne Twister ele é 4x mais rápido, moderno é confiavel que o anterior 
                //random_int() = gera números aleatorios criptograficamente seguros = mais lento

                if($num){
                    echo "
                        <p>O valor gerado foi <strong>$num</strong></p>
                    ";
                }else{
                    echo "Informação Invalida!";
                }
            ?>   
            <button onclick="javascript:document.location.reload()">Gerar outro</button>
        </div>
    </main>
</body>
</html>

