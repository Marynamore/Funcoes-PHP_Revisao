<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                //permite que vc configure um COOKIE novo
                setcookie("dia-da-semana","SEGUNDA", time()+ 3600);//esse cookie vai ser dia da semana | o valor dele vai ser SEGUNDA | Quanto tempo esse cookie vai durar (sele for durar uma hora == time()+ 3600(uma hora tem 3600 segundos))

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST); //todo o conteúdo do array

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST); 
            
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE); 

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV); //ele vai mostrar as variaveis de um ambiente
                foreach (getenv() as $chave => $valor) {
                    echo "<br>$chave -> $valor";
                }

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);
                
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS); 
            ?>
        </pre>
    </main>
</body>
</html>
