<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        //SUPER GLOBAIS
        // var_dump($_REQUEST); //junção $_GET and $_POST and $_COOKIES 
        
        $nome = $_GET["nome"] ?? "Sem nome";
        $snome = $_GET["sobrenome"] ?? "desconhecido"; // Usando o operador de coalescência nula 

        echo "<p> É um prazer te conhecer, <strong> $nome $snome</strong>! Este é o meu site</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>