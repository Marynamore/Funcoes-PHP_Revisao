<?php

session_start();
//inicializar trabalho com sessões

unset($_SESSION["login"]); 
//limpa variavel de sessão login

unset($_SESSION["perfil"]);
//limpa variavel de sessão perfil

session_destroy();
// Encerra a sessão atual e remove todos os dados associados