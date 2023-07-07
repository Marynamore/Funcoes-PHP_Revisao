<?php
// Gravação do cookie
setcookie("usuario1", "aluno123", time()+180);
// Define um cookie com nome "usuario1", valor "aluno123" e expira em 180 segundos (3 minutos)

// Leitura do cookie
$nome = $_COOKIE["usuario1"];
// Obtém o valor do cookie "usuario1" e armazena na variável $nome

echo "Valor do cookie: $nome";
// Exibe o valor do cookie na página
