<?php

//atribuindo método de "abertura" de arquivo em variável ($file)
//1 param: cria arquivo "log.txt"
//2 param: indica ação "w" <- write: criar/recriar informação no arquivo
//$file = fopen("log.txt", "w+");
//2 param: indica ação "a" <- write: adicionar no arquivo
$file = fopen("log.txt", "a+");

//função para escrever em arquivo
//1 param: resource (a variável $fopen)
//2 param: dados para inserir no arquivo (data de alteração)
fwrite($file, date("Y-m-d H:i:s") . "\r\n");
// concatena "\r\n" (quebra de linha) após inserção da informação

//função para cloncluir alteração e "fechamento" do arquivo
fclose($file);

echo ("Arquivo criado com sucesso!")

?>