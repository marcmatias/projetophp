<?php
	$email = $_GET["email_slc"];
	include("/../conexao.php");
	$consulta="DELETE FROM contato WHERE email='$email'";

	$executar_consulta = $conexao->query($consulta);
	if($executar_consulta)
		$mensagem = "O registro foi apagado com sucesso!";
	else
		$mensagem = "Não foi possível deletar o registro!";

	$conexao->close();

	session_start();
	$_SESSION['mensagem'] = $mensagem;
	header("Location: ../../index.php");
?>
