<?php 
require 'config.php';

$info = []; // Array vazio para armazenar as informações do usuário
$id = $_GET['id']; // Obtém o valor do parâmetro 'id' da URL

if ($id) {
  // Prepara a consulta SQL para selecionar os dados do usuário com base no 'id'
  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();

  if ($sql->rowCount() > 0) {
    $info = $sql->fetch(PDO::FETCH_ASSOC); 
    // Recupera as informações do usuário e as atribui à variável $info
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>EDITAR USUÁRIO</h1>

    <form method="POST" action="editar_action.php">
        <input type="hidden" name="id" value="<?= $info['id'] ?>">

        <label>Nome:<br></label>
        <input type="text" name="nome" value="<?= $info['nome'] ?>">
        <br><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $info['email'] ?>">
        <br><br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>

