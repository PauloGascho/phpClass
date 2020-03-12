<?php

$name = "images";

//verifica se o diretório não existe cria um diretório com valor da variável
if (!is_dir($name)){
	mkdir($name);
	echo "Diretório $name criado com sucesso!";
//se o diretório existe remove o diretório
} else {
	rmdir($name);
	echo "Já existe o diretório: $name foi removido";
}

?>