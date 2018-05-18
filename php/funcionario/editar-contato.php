<?php
//variaveis que serão utilizadas no formulário

$email = $_POST["email_hdn"];
$nome = $_POST["nome_txt"];
$sexo = $_POST["sexo_rdo"];
$nascimento = $_POST["nascimento_txt"];
$telefone = $_POST["telefone_txt"];
$rua = $_POST["rua_txt"];
$numero = $_POST["numero_txt"];
$bairro = $_POST["bairro_txt"];
$cidade = $_POST["cidade_txt"];
$estado = $_POST["estado_txt"];

//Iniciar a conexao e a consulta
include("conexao.php");
$consulta = "select * from contatos WHERE email='$email'";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//verificar se contato ja esta cadastrado no banco
if($num_regs == 1){
	//atualizar os dados no banco
	$consulta = "UPDATE contatos SET nome='$nome',email='$email', sexo='$sexo', nascimento='$nascimento',
	telefone='$telefone', logradouro='$rua', log_numero='$numero', bairro='$bairro', cidade='$cidade', estado='$estado'
	WHERE email='$email'";
	
	
	$executar_consulta = $conexao->query(utf8_encode($consulta));
	
	if($executar_consulta)
		$mensagem = "O contato foi Editado <b>$email</b>";
	else
		$mensagem = "Não foi possível editar o contato <b>$email</b>";
	
}	else{
		$mensagem = "A edição não será feita, ocorreram problemas!";
	}
		
$conexao->close();
header("Location: ../../index.php?op=editar&mensagem=$mensagem");
?>