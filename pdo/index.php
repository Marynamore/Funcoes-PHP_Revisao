<?php 
require_once 'config.php';

$lista = []; // Inicializa uma variável $lista como um array vazio

$sql = $pdo->query("SELECT * FROM usuarios"); // Executa uma consulta para selecionar todos os usuários da tabela

if ($sql->rowCount() > 0) { // Verifica se a consulta retornou algum resultado
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC); 
    // Armazena os dados dos usuários em $lista como um array associativo
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align='center'>
        <h3>
            <a href="adicionar.php">
                <input type="button" value="..::ADICIONAR USUARIO::..">
            </a>
        </h3>
    </div>
    <br>
    <table border="1" width='100%'>
        <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
        </tr>
    <?php 
        foreach($lista as $usuario): 
        // Itera sobre cada usuário na $lista 
    ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $usuario['id']; ?>"><input type="button" value="Editar"></a>
                <a href="excluir.php?id=<?php echo $usuario['id']; ?>"><input type="button" value="Excluir"></a>
            </td>
        </tr>
    <?php endforeach; ?>
    
    </table>
</body>
</html>
