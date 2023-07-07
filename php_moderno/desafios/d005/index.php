<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Analisando Números Real</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <h1>Analisador de Número Real</h1>
        <form action="analisador.php" method="post">
            <label for="numreal" class="field-label">Informe um Número Real</label>
            <input type="number" name="numReal" id="idNumReal" step="0.001" class="field">
            <input type="submit" value="Analisar" class="field-submit">
        </form>
    </main>
</body>
</html>
