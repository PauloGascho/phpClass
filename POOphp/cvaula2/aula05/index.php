<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<pre>
	<?php

		require_once 'ContaBanco.php';

		$p1 = new ContaBanco(); //Jubileu
		$p2 = new ContaBanco(); //Creusa

		$p1->abrirConta("CC");
		$p1->setDono("Jubileu");
		$p1->setNumConta(1111);
		$p2->abrirConta("CP");
		$p2->setDono("Creusa");
		$p2->setNumConta(2222);

		$p1->depositar(300);
		$p2->depositar(500);

		$p2->sacar(100);

		print_r($p1);
		print_r($p2);
	?>
</pre>
</body>
</html>