<?php
//variaveis que serão utilizadas no formulário
$id = $_POST["id_txt"];
$email = $_POST["email_txt"];
$nome = $_POST["nome_txt"];
$sexo = $_POST["sexo_rdo"];
$nascimento = $_POST["nascimento_txt"];
// Telefones
$telefone0 = $_POST["telefone0_txt"];
$telefone1 = $_POST["telefone1_txt"];
$telefone2 = $_POST["telefone2_txt"];
$idtelefone0 = $_POST["idtelefone0_txt"];
$idtelefone1 = $_POST["idtelefone1_txt"];
$idtelefone2 = $_POST["idtelefone2_txt"];
// --
$cep = $_POST["cep_txt"];
$rua = $_POST["rua_txt"];
$numero = $_POST["numero_txt"];
$complemento = $_POST["complemento_txt"];
$bairro = $_POST["bairro_txt"];
$cidade = $_POST["cidade_txt"];
$estado = $_POST["estado_txt"];

// $contato = $_GET["contato_slc"];

//Iniciar a conexao e a consulta
include("conexao.php");
$consulta = "SELECT * FROM `contato` WHERE `idcontato` = '$id'";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//verificar se contato ja esta cadastrado no banco
if($num_regs == 1){
	$consulta = "UPDATE `contato` SET `nome` = '$nome', `email` = '$email', `sexo` = '$sexo',
 `nascimento` = '$nascimento', `cep` = '$cep', `bairro` = '$bairro', `logradouro` = '$rua',
 `estado` = '$estado', `cidade` = '$cidade', `numero` = '$numero',
 `complemento` = '$complemento' WHERE `idcontato` = '$id'";

	$executar_consulta = $conexao->query(utf8_encode($consulta));

	// Loop de adição de telefones
	$consulta_telefone = "SELECT * FROM telefone WHERE idcontato='$id'";
	$executar_consulta_telefone = $conexao->query($consulta_telefone);

	for ($i=0; $i < 3; $i++) {
		$registro_telefone = $executar_consulta_telefone->fetch_assoc();
		if ((!empty(${'telefone' . $i})) and (!empty(${'idtelefone' . $i}))){
			$consulta = "UPDATE `telefone` SET `telefone` = '${'telefone' . $i}' WHERE `telefone`.`idcontato` = '$id' AND `telefone`.`idtelefone` = '${'idtelefone' . $i}'";
			$executar_consulta2 = $conexao->query(utf8_encode($consulta));
		}else if((!empty(${'telefone' . $i})) and (empty(${'idtelefone' . $i}))){
				$consulta = "INSERT INTO `telefone` (`idcontato`,`idtelefone`,`telefone`) VALUES ($id, NULL, ${'telefone' . $i})";
				$executar_consulta2 = $conexao->query(utf8_encode($consulta));
		}else{
			$consulta="DELETE FROM `telefone` WHERE `telefone`.`idcontato` = '$id' AND `telefone`.`idtelefone` = '${'idtelefone' . $i}'";
			$executar_consulta2 = $conexao->query(utf8_encode($consulta));
		}
	}

	if($executar_consulta)
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
