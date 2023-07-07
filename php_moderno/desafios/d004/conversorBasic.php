<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Conversor v2.0</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <h1>Conversor de Moedas v2.0</h1>
        <div>
            <?php 
            
            //Cotação vinda do Banco Central
            $dt_inicio = date("m-d-Y", strtotime("-7 days"));
            $dt_fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dt_inicio.'\'&@dataFinalCotacao=\''.$dt_fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Quanto $$ vc tem na carteira?
            $real = $_REQUEST["real"] ?? 0;


            // Equivalência em dolar
            $total_em_dolar = $real / $cotacao; 

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);


            echo "
                <p>Seus ".numfmt_format_currency($padrao, $real, 'BRL')." equivalem a <strong> ".numfmt_format_currency($padrao, $total_em_dolar, 'USD')."</strong></p>
                <p><strong>*Cotação obtida diretamente do site do </strong><a href=\"https://www.bcb.gov.br/\" target=\"_blank\">Banco Central do Brasil</a></p>
            ";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>
</html>