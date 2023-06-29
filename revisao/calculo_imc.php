<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2: Corrigir</title>
</head>
<body>
    <h1>IMC</h1>
    <form action="index2.php" method="post">
        <label for="altura">Informe a sua altura: </label>
        <input type="number" name="altura" id="altura"><br><br>
        <label for="genero">Gênero: </label>
        <select name="genero []" id="genero">
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
        </select> <br><br>
        <input type="submit" value="Enviar">  
    </form>
    <?php
        $genero=$_POST["genero"];
        $altura=$_POST["altura"];
        if ($genero='Feminino'){
            echo (62.1*$altura)-44.7;
        }elseif ($genero='Masculino'){
            echo (72.7*$altura)-58;
        }else{
            echo 'ERRO';
        }
        
    ?>

</body>
</html>
