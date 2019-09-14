<?php

class pessoa{

	private $nome;
	private $idade;
	private $peso;

	public function __construct($nome, $idade, $peso){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->peso = $peso;
	}

	public function getNome(){

		return $this->nome;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function getPeso(){

		return $this->peso;

	}

}

$pessoa = New pessoa('João','35','90');
$nome = $pessoa->getNome();
$idade = $pessoa->getIdade();
$peso = $pessoa->getPeso();

echo "Nome: ".$nome."<br>";
echo "Idade: ".$idade."<br>";
echo "Peso: ".$peso."Kg";



