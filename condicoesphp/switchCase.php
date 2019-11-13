<?php

$diadasemana = date("w");

switch ($diadasemana) {
	case 0:
		echo "domingo";
		break;
	case 1:
		echo "segunda";
		break
	case 2:
		echo "terça";
		break
	case 3:
		echo "quarta";
		break
	case 4:
		echo "quinta";
		break
	case 5:
		echo "sexta";
		break
	case 6:
		echo "sábado";
		break
	case 7:
		echo "domingo";
		break
	default:
		echo "data inválida"
		break;
}


?>