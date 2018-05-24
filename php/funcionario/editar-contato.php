<?php
//variaveis que serão utilizadas no formulário

$email = $_POST["email_hdn"];
$nome = $_POST["nome_txt"];
$sexo = $_POST["sexo_rdo"];
$nascimento = $_POST["nascimento_txt"];
$cep = $_POST["cep_txt"];
$rua = $_POST["rua_txt"];
$numero = $_POST["numero_txt"];
$complemento = $_POST["complemento_txt"];
$bairro = $_POST["bairro_txt"];
$cidade = $_POST["cidade_txt"];
$estado = $_POST["estado_txt"];
$telefone = '3333';

// $contato = $_GET["contato_slc"];

//Iniciar a conexao e a consulta
include("conexao.php");
$consulta = "select * from contato WHERE email='$email'";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//verificar se contato ja esta cadastrado no banco
if($num_regs == 1){
	$consulta = "UPDATE `contato` SET `nome` = '$nome', `email` = '$email', `sexo` = '$sexo',
 `nascimento` = '$nascimento', `cep` = '$cep', `bairro` = '$bairro', `logradouro` = '$rua',
 `estado` = '$estado', `cidade` = '$cidade', `numero` = '$numero',
 `complemento` = '$complemento' WHERE `email` = '$email'";

	$executar_consulta = $conexao->query(utf8_encode($consulta));

// início de planejamento de inserção de telefones já funcinoal
	// $id = "SELECT idcontato FROM contato WHERE email like '$email'";
	// $executar_consulta = $conexao->query(utf8_encode($id));
	// $row = $executar_consulta->fetch_assoc();
	// $id = $row['idcontato'];

	// $consulta = "INSERT INTO `telefone` (`idcontato`,`idtelefone`,`telefone`) VALUES ($id, NULL, $telefone)";

	$executar_consulta2 = $conexao->query(utf8_encode($consulta));

	if($executar_consulta and $executar_consulta2)
		$mensagem = "O contato " .utf8_encode($nome). " foi editado";
	else
		$mensagem = "Não foi possível editar o contato " .utf8_encode($nome). ".";

}	else{
		$mensagem = "A edição não será feita, ocorreram problemas!";
	}

$conexao->close();

session_start();
$_SESSION['mensagem'] = $mensagem;
header("Location: ../../index.php");
?>
