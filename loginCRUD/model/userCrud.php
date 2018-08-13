<?php 	
require_once 'user.php';
require_once 'conexao.php';

class userCrud{
	private $conexao;


	public function insertUser(user $user){

		$this->conexao = conexao::getConexao();
		$dados[] = $user->getidUser();	
		$dados[] = $user->getnumMatricula();
		$dados[] = $user->getcpf();
		$dados[] = $user->getsenha();
		$dados[] = $user->getemail();
		$dados[] = $user->getnome();		
		$dados[] = $user->getlogin();
		$dados[] = $user->getidTipUser();
		print_r($dados);
		$sql = "insert into user(idUser,numMatricula,cpf,senha,email,nome,login,idTipUser) VALUES('{$dados[0]}','{$dados[1]}','{$dados[2]}','{$dados[3]}','{$dados[4]}','{$dados[5]}','{$dados[6]}','{$dados[7]}')";
		echo $sql;
		$this->conexao->exec($sql);

	}
}




?>