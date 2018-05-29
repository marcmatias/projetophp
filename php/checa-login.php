<?php
	session_start();
	if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true)){
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		$mensagem = "Faça login para acessar o sistema.";
		$_SESSION['mensagem'] = $mensagem;
		header("Location: php/login.php");
	}
	$username = $_SESSION['username'];
 ?>
