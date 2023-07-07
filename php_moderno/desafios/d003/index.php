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
        <form action="conversorBasic.php" method="get">
            <label for="real" class="field-label">Quantos R$ você tem na carteira?</label>
            <input type="number" name="real" id="idreal" step="0.01" class="field">
            <input type="submit" value="Converter" class="field-submit">
        </form>
    </main>
</body>
</html>
