<?php 
	require_once "userCrud.php";
	require_once "user.php";




	$usuario = new user("1",$_POST["numMatricula"],$_POST["cpf"],$_POST["senha"],$_POST["email"],$_POST["nome"],,$_POST["login"],"1");



	$crud = new userCrud();
	$crud->insertUser($usuario);

	header("Location:cadastro.php");






?>