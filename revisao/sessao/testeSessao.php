<?php
// Inicia a sessão
session_start();

// Define os valores das variáveis de sessão
$_SESSION["login"] = "jcbatista";
$_SESSION["perfil"] = "vendedor";

// Exibe uma mensagem informando que a sessão foi iniciada
echo "sessão iniciada";

