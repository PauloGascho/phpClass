<?php

$images = scandir("images");

$data = array();

foreach ($images as $img) {

	if (!in_array($img, array(".", ".."))) {

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		//método de informação da pasta atribuindo o caminho indicado acima (filename) em variável
		$info = pathinfo($filename);

		//retorna tamanho do arquivo
		$info["size"] = filesize($filename);

		//retorna data de última modificação
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

		//retorna informação da url do arquivo (str_replace inverte a /)
		$info["url"] = "http://localhost/DIR/".str_replace("\\", "/", $filename);

		//var_dump($info);
		
		array_push($data, $info);
	}
}

echo json_encode($data);

?>