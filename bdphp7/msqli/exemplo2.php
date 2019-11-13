<?php

// Fazendo a conecção com banco de dados (servidor, usuário, senha, banco)
$conn = new mysqli("127.0.0.1", "root", "", "dbphp7");

if ($conn->connect_error) {
	echo "Error :". $conn->connect_error;
}
else {
	echo "Ae, conectou a jabirosca!";
}

$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");
$data = array();
while ($row = $result->fetch_assoc()) {
	array_push($data, $row);
}

echo json_encode($data);

?>