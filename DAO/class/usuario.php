<?php

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;
	}
	public function getDeslogin(){
		return $this->deslogin;
	}
	public function getDessenha(){
		return $this->dessenha;
	}
	private function getDtcadastro(){
		return $this->cadastro;
	}

	private function setIdsuario($value){
		$this->idusuario = $value;
	}
	private function setDeslogin($value){
		$this->deslogin = $value;
	}
	private function setDessenha($value){
		$this->dessenha = $value;
	}
	private function setDtcadastro($value){
		$this->cadastro = $value;
	}

	public function loadById($id){
		$sql = new Sql();

		$results = $sql -> select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if (count($results)>0){
			$row = $results[0];

			$this->setIdsuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
	}
	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}

//final da classe Usuario
}


?>