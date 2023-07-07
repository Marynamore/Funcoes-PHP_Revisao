<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Conversor v1.0</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <h1>Conversor de Moedas v1.0</h1>
        <div>
        <?php 
        
        $real = $_REQUEST["real"] ?? 0;
        $cotacao_fixa = 5.22;
        
        $total_em_dolar = $real / $cotacao_fixa; 

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "
            <p>Seus ".numfmt_format_currency($padrao, $real, 'BRL')." equivalem a <strong> ".numfmt_format_currency($padrao, $total_em_dolar, 'USD')."</strong></p>
            <p><strong>*Cotação fixa de R$5,22</strong> informada diretamente no código.</p>
        ";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>
</html>