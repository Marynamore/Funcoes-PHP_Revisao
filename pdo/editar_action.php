<?php 
// Inclui o arquivo de configuração que contém a conexão com o banco de dados
require 'config.php';

// Obtém os valores dos campos nome, email e id do formulário usando a função filter_input
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$id = filter_input(INPUT_POST, 'id');

// Verifica se os valores de id, email e nome estão definidos
if (isset($id, $email, $nome)) {

  // Prepara a consulta SQL para atualizar os dados na tabela usuarios
  $sql = $pdo->prepare("UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id");

  $sql->bindParam(':nome', $nome);
  $sql->bindParam(':email', $email);
  $sql->bindParam(':id', $id);

  $sql->execute();

  header("Location:index.php");
  exit;

}else{
    header("Location:adicionar.php");
    exit;
}
