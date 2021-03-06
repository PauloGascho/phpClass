<?php

require_once("config.php");
//require do arquivo de autobusca (spl_autoload_register) das classes

$sql = new Sql();
//novo objeto da classe Sql com os comandos para banco de dados

$usuarios = $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");
//atribui um select (através de método do objeto sql) da tabela na variável ($usuarios)

$headers = array();

foreach($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {
	
	$data = array();

	foreach ($row as $key => $value) {
		array_push($data, $value);
	}//End foreach de coluna

	fwrite($file, implode(",", $data) . "\r\n");
}//End foreach de linha

print_r($headers);

?>