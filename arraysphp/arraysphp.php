<?php

$nome = "Paulo ";

function teste(){

	global $nome;
	echo $nome;

}

echo " ";

function teste2(){

	$nome = "jão";
	echo $nome. " agora no teste2";
}

teste();
teste2();

?>