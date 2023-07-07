<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>

    <?php 
    // 0x = hexadecimal 0b = binário 0 = Octal

       // $num = 0x1A; 
        // echo "O valor da variável é $num";

       // $v = 300;
       // var_dump($v); // ele mostra o valor e o tipo primitivo

      // $num = (int) 3e2; // 3 x 10(2) coerção
       // echo "O valor é $num";

       // $num = (int) "950";

       //$casado = false;
        //var_dump($casado); /* No VAR_DUMP FUNCIONA*/
        //print "O valor para casado é $casado";
        /* ISTO PORQUE O VALOR "FALSE" DENTRO DE UM ECHO OU PRINT É VAZIO E TRUE É 1*/

        //$vet = [6, 2, 9, 3, 56];
        //var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>

</body>
</html>
