<?php
//variaveis que serão utilizadas no formulário

$email = $_POST["email_txt"];
$nome = $_POST["nome_txt"];
$sexo = $_POST["sexo_rdo"];
$nascimento = $_POST["nascimento_txt"];
$telefone = $_POST["telefone_txt"];
$rua = $_POST["rua_txt"];
$numero = $_POST["numero_txt"];
$bairro = $_POST["bairro_txt"];
$cidade = $_POST["cidade_txt"];
$estado = $_POST["estado_txt"];

//verificar se ja existe o email ja cadastrado
include("conexao.php");
$consulta = "select * from contatos WHERE email='$email'";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//se ja tem registros na tabela, ele fala que o email ja existe
if($num_regs == 0){
	//sera executado a função para registrar no banco
	include("functions.php");
	$consulta = "INSERT INTO contatos (email,nome,sexo,nascimento,telefone,logradouro,log_numero,bairro,cidade,estado) VALUES ('$email','$nome','$sexo','$nascimento','$telefone','$rua','$numero','$bairro','$cidade','$estado')";
	
	$executar_consulta = $conexao->query(utf8_encode($consulta));
	
	if($executar_consulta)
		$mensagem = "O contato foi registrado <b>$email</b>";
	else
		$mensagem = "Não foi possível registrar o contato <b>$email</b>";
	
}	else{
		$mensagem = "O registro não será feito, pois este contato já está cadastrado!";
}
$conexao->close();
header("Location: ../index.php?op=add&mensagem=$mensagem");
?>