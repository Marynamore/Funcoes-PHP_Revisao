<?php
if(isset($_POST["senha"])){
  $senha = strip_tags($_POST["senha"]);
  $email = strip_tags($_POST["email"]);

    //echo $_POST["email"]."<br>".$_POST["senha"]."<hr>";
    //echo $email."<br>".$senha;

    if($senha=="123" && $email=="adm@gmail.com"){
        header ("Location: index.php");
        }else{ 
        $arquivo = fopen('log_login.txt','a+');
        }

    if ($arquiivo == false){
    die('Não foi possivel criar o aquivo.');
    $pagar_ip = $_SERVE["REMOTE_ADDR"];
    $texto = "Usuario tentou login do IP: $pegar_ip";
    fwrite ($arquivo, $texto);
    fclose ($arquivo);
    header("Location: login.php?msg=Senha ou Email Invalido!");
    }else{
        header ("Location: index.php");
    }

}else {
echo "Login nao foi informado!";
}
