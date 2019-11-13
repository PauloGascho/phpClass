<?php

class Caneta {
	public $modelo;
	private $ponta;

	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($m){
		$this->modelo = $m;
	}
	public function getPonta(){
		return $this->ponta;
	}
	public function setPonta($p){
		$this->ponta = $p;
	}
}


?>