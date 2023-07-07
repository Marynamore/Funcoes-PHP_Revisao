<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php //TUDO ISSO FOI PRÉ-PROCESSADO pelo Servidor
        date_default_timezone_set("America/Sao_Paulo"); //configure a area padrão da data
        echo "Hoje é dia" . date("d/M/Y"); //d {dia numérico} e D {dia da Semana}
        print "e a hora atual é" . date("G:i:s T");
        // G{hora} i{minuto} s{segundos} T{timezone = facha de horario mundial} CET/UTC(dentre outras){configuração do servidor}
        // Timezone do Brazil GMT-3
    ?>
</body>
</html>
