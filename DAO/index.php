<?php

require_once("config.php");

// Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(8);
//echo $root;

// Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("frederico","0987654321");
echo $usuario;

?>