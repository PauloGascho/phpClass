<?php

//função para criar o arquivo
$file = fopen("teste.txt", "w+");

fclose($file);

//função para remover o arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso";

?>