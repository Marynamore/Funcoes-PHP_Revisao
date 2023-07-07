<?php
if(isset($_POST["senha"])){
  $senha = strip_tags($_POST["senha"]); 
  // Obtém a senha do formulário e remove possíveis tags HTML

  $email = strip_tags($_POST["email"]); 
  // Obtém o email do formulário e remove possíveis tags HTML

  if($senha == "123" && $email == "adm@gmail.com"){
    header("Location: index.php"); 
    // Redireciona para a página inicial em caso de login bem-sucedido

  } else {
    $arquivo = fopen('log_login.txt', 'a+'); 
    // Abre o arquivo de log no modo de escrita (append)

    if($arquivo == false){
      die('Não foi possível criar o arquivo.'); 
      // Encerra o script se não for possível criar o arquivo de log
      
    } else {
      $pegar_ip = $_SERVER["REMOTE_ADDR"]; 
      // Obtém o endereço IP do usuário

      $texto = "Usuário tentou login do IP: $pegar_ip\n"; 
      // Prepara a mensagem de registro no arquivo de log

      fwrite($arquivo, $texto); 
      // Escreve a mensagem de registro no arquivo de log

      fclose($arquivo); 
      // Fecha o arquivo de log

      header("Location: login.php?msg=Senha ou Email Inválido!"); 
      // Redireciona para a página de login com mensagem de erro
    }
  }
} else {
  echo "Login não foi informado!"; 
  // Mensagem de erro se o formulário de login não foi submetido
}
