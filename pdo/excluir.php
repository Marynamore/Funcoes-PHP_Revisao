<?php 
require 'config.php';

$id = filter_input(INPUT_GET, 'id'); 
// Obtém o valor do parâmetro 'id' da URL usando a função filter_input

if ($id) {
    $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id"); // Prepara a consulta SQL para excluir o usuário com base no 'id'

    $sql->bindValue(':id', $id); 
    // Atribui o valor do parâmetro 'id' à consulta preparada

    $sql->execute(); 
    // Executa a consulta preparada para excluir o usuário do banco de dados
}

header("Location: index.php"); 

