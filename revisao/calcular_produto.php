<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão Formulário</title>
</head>
<body>
    <main>
        <h1>Calcular Produto</h1>
        <form action="" method="post">
            <input type="number" name="val1" id=""> X <input type="number" name="val2" id=""> = <input type="submit" value="Calcular">
        </form>
    </main>
    <?php
        $num1 = $_POST["val1"];
        $num2 = $_POST["val2"];

        $produto = $num1 * $num2;
        echo "O resultado é <strong>$produto</strong>";
    ?>
</body>
</html>
