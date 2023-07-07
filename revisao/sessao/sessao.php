<?php 
/*
=> É interessante utilizar sessões ($_SESSION)
quando você precisa passar dados de uma
página para outra em sua aplicação. 

=> Você só precisa criar a sessão, setar o valor necessário, e, magicamente, o valor configurado aparecerá em todas as outras páginas ou arquivos do seu script PHP quando necessário.
*/

//inicia a sessao
session_start();


//Cria chave e seus valores
$_SESSION['email'] = "teste@sessao.com";

echo $_SESSION['email'];

//ele limpa essa posição da sessao da memoria
unset($_SESSION['email']);

//mostra uma frase na tela
echo "Olá ".$_SESSION['email']."";

//para encerrar uma sessao 

session_destroy();
