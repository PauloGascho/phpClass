<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");

$id = 7;

$stmt->execute(array($id));

//cancela a transação
//$conn->rollback();

//confirma a transação
$conn->commit();

echo "dados deletados com sucesso!";

?>