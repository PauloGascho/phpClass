<?php

//classe herdada da classe reservada PDO
class Sql extends PDO {
	private $conn;

	//função para conexão com o banco de dados na instancia do objeto classe
	public function __construct(){
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "");
	}

	//executa método de setar parametros
	private function setParams($statment, $parameters = array()){
		foreach ($parameters as $key => $value) {
			$this->setParam($key, $value);
		}
	}

	//executa método de setar apenas um parâmetro
	private function setParam($statment, $key, $value){
		$statment->bindParam($key, $value);
	}

	//executa comandos de preparação
	public function query($rawQuery, $params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;	
	}

	public function select($rawQuery, $params = array()):array{
		$stmt = $this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>