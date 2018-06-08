<?php
	function conectar(){
		$servidor = "localhost";
		$usuario = "mepassa_root";
		$senha= "admin123@";
		$bd = "mepassa_dbprojetophp";

		$con = new mysqli($servidor,$usuario,$senha,$bd);
		mysqli_set_charset($con,"utf8");
		return $con;
	}

	$conexao = conectar();
?>
