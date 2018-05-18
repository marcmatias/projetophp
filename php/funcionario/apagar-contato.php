<?php
$email = $_POST["email_slc"];
include("conexao.php");
$consulta="DELETE FROM contatos WHERE email='$email'";

$executar_consulta = $conexao->query($consulta);
if($executar_consulta)
	$mensagem = "O registro foi apagado com sucesso!";
else
	$mensagem = "Não foi possível deletar o registro!";

$conexao->close();
header("Location: ../../index.php?op=apagar&mensagem=$mensagem");
?>