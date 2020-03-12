<?php

if (!is_dir("unages")) mkdir("images;");

//scandir seleciona todos os arquivos de um diretorio
foreach (scandir("images") as $item) {
	if(!in_array($item, array(".",".."))) {
		unlink("images/" . $item);
	}
}

echo "OK";

?>