<?php
	class Departamento{
		private $id;
		private $nome;
		private $nfunc;
		private $instituicao;

		public function __construct($id,$nome,$nfunc,$instituicao){
			
			$this->id = $id;
			$this->nome = $nome;
			$this->nfunc = $nfunc;
			$this->instituicao = $instituicao;							     
		}		

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getNfunc(){
			return $this->nfunc;
		}

		public function getInstituicao(){
			return $this->instituicao;
		}

		public function imprimeDados(){
			echo $this->getId() . "<br>";
			echo $this->getNome() . "<br>";
			echo $this->getNfunc() . "<br>";
			echo "------- Dados da Instituicao --------<br>";
			echo $this->getInstituicao()->imprimeDados();

		}
	}
?>