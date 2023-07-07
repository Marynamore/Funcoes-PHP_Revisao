<?php
/**
 * A linha $pdo = new PDO("mysql:dbname=banco_turma_g;host=localhost", "root", ""); cria uma nova instância do objeto PDO para estabelecer a conexão com o banco de dados MySQL.
 * O parâmetro "mysql:dbname=banco_pdo;host=localhost" especifica o tipo de banco de dados (MySQL), o nome do banco de dados (banco_pdo) e o host onde o banco de dados está localizado (localhost).
 * O segundo parâmetro "root" representa o nome de usuário do banco de dados.
 * O terceiro parâmetro "" representa a senha do banco de dados. No exemplo, a senha está vazia, o que significa que não há senha definida. 
*/

$pdo = new PDO("mysql:dbname=banco_pdo;host=localhost", "root", "");


