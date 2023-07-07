<?php 
// Inclui o arquivo de configuração que contém a conexão com o banco de dados
  require 'config.php';
  
   if(isset($_POST["nome"]) && isset($_POST['email'])){

      $nome = $_POST["nome"];
      $email= $_POST["email"];

      // Prepara a query SQL para inserir os dados na tabela "usuarios"
      $sql = $pdo->prepare("INSERT INTO usuarios(nome, email) VALUES (:nome, :email)");

      // Associa os valores aos parâmetros da query
      $sql->bindParam(':nome',$nome);
      $sql->bindParam(':email',$email);

      // Executa a query
      $sql->execute();

      header("Location:index.php");
      exit;

   }else{

      header ("Location:adicionar.php");
      exit;
   }

?>