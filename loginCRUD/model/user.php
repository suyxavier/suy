<?php 
	

	class user{
		private $idUser;
		private $numMatricula;
		private $cpf;
		private $senha;
		private $email;
		private $nome;
		private $login;
		private $idTipUser;

		public function __construct($idUser = null,$numMatricula = null,$cpf = null,$senha = null,$email = null,$nome = null,$login = null,$idTipUser = null){

			 $this->idUser = $idUser;
			 $this->numMatricula = $numMatricula;
			 $this->cpf = $cpf;
			 $this->senha = $senha;
			 $this->email = $email;
			 $this->nome = $nome;
			 $this->login = $login;
			 $this->idTipUser = $idTipUser;


		}
		public function getidUser(){
			return $this->idUser;
		}
				public function getnumMatricula(){
			return $this->numMatricula;
		}
				public function getcpf(){
			return $this->cpf;
		}
				public function getsenha(){
			return $this->senha;
		}
				public function getemail(){
			return $this->email;
		}
				public function getnome(){
			return $this->nome;
		}
				public function getlogin(){
			return $this->login;
		}
				public function getidTipUser(){
			return $this->idTipUser;
		}


	}






?>	