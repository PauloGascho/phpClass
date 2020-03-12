<?php

class ContaBanco{

	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	public function abrirConta($t){
		$this->setTipo($t);
		$this->setStatus(true);
		if ($t == "CC"){
			$this->saldo = 50;
		}
		else if ($t == "CP"){
			$this->saldo = 150;
		}
	}
	public function fecharConta(){
		if ($this->saldo > 0){
			echo "<p>Conta com dinheiro, não posso fechá-la.</p>";
		}
		elseif ($this->saldo){
			echo "<p>Conta em débito. Não é possível encerrar.</p>";
		}
		else {
			$this->setStatus(false);
		}
	}
	public function depositar($v){
		if ($this->status == true){
			$this->setSaldo($this->getSaldo() + $v);
		}
		else {
			echo "<p>Conta fechada. Impossível depositar.</p>";
		}

	}
	public function sacar($v){
		if ($this->status == true){
			if ($this->saldo >= $v){
				$this->setSaldo($this->getSaldo() - $v);
				echo "<p>Saque de $v autorizado na conta de ".$this->getDono()."</p>";
			}
			else {
				echo "<p>Saldo insuficiente para saque.</p>";
			}
		}
		else {
			echo "<p>Impossível sacar de uma conta encerrada.</p>";
		}
	}
	public function pagarMensal(){
		if ($this->getTipo() == "CC"){
			$v = 12;
		}
		else if ($this->getTipo() == "CP"){
			$v = 20;
		}
		if ($this->getStatus()){
			$this->setSaldo($this->getSaldo() - $v);
		}
		else {
			"<p>Problemas com a conta. Não posso cobrar.</p>";
		}
	}

	public function ContaBanco(){
		$this->saldo = 0;
		$this->status = false;
		echo "<p>Conta criada com sucesso!</p>";
	}

	public function setNumConta($n){
		$this->numConta = $n;
	}
	public function getNumConta(){
		return $this->numConta;
	}
	public function setTipo($t){
		$this->tipo = $t;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function setDono($d){
		$this->dono = $d;
	}
	public function getDono(){
		return $this->dono;
	}
	public function setSaldo($s){
		$this->saldo = $s;
	}
	public function getSaldo(){
		return $this->saldo;
	}
	public function setStatus($s){
		$this->status = $s;
	}
	public function getStatus(){
		return $this->status;
	}
}

?>