<?php 
require_once 'userCrud.php';
require_once 'user.php';

	$usuario = new user('2','19987202-0','88390000','123','pedro_gui357@hotmail.com','pedro guilherme barauna','pedro.barauna','15');

	
	$crud = new userCrud();

	$crud->insertUser($usuario);







?>