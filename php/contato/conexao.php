<?php
function conectar(){
	$servidor = "localhost";
	$usuario = "root";
	$senha= "";
	$bd = "criacaotabelas";

	$con = new mysqli($servidor,$usuario,$senha,$bd);
	mysqli_set_charset($con,"utf8");
	return $con;

}

$conexao = conectar();
?>
