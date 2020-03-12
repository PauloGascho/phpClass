<?php

// Fazendo a conecção com banco de dados (servidor, usuário, senha, banco)
$conn = new mysqli("127.0.0.1", "root", "", "dbphp7");

if ($conn->connect_error) {
	echo "Error :". $conn->connect_error;
}
else {
	echo "Ae, conectou a jabirosca!";
}

// Inserindo novo usuário na tabela
// Comando sql
$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) values (?, ?)");
// parâmetros de insersão (tipo1tipo2, coluna1, coluna2)
$stmt->bind_param("ss", $login, $pass);
$login = "user";
$pass = "12345";
$stmt->execute();
$login = "user2";
$pass = "54321";
$stmt->execute();

?>