<?php
//variaveis que serão utilizadas no formulário

$email = $_POST["email_txt"];
$nome = $_POST["nome_txt"];
$sexo = $_POST["sexo_rdo"];
$nascimento = $_POST["nascimento_txt"];
$telefone0 = $_POST["telefone0_txt"];
$telefone1 = $_POST["telefone1_txt"];
$telefone2 = $_POST["telefone2_txt"];
$rua = $_POST["rua_txt"];
$numero = $_POST["numero_txt"];
$bairro = $_POST["bairro_txt"];
$cidade = $_POST["cidade_txt"];
$estado = $_POST["estado_txt"];
$complemento = $_POST["complemento_txt"];
$cep =$_POST["cep_txt"];


//verificar se ja existe o email ja cadastrado
include("conexao.php");
$consulta = "select * from contato WHERE email='$email'";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//se ja tem registros na tabela, ele fala que o email ja existe
if($num_regs == 0){
	//sera executado a função para registrar no banco
	// include("functions.php");

	$consulta = "INSERT INTO contato (email,nome,sexo,nascimento,logradouro,numero,bairro,cidade,estado, complemento, cep) VALUES ('$email','$nome','$sexo','$nascimento','$rua','$numero','$bairro','$cidade','$estado', '$complemento', '$cep')";

	$executar_consulta = $conexao->query(utf8_encode($consulta));

	// inserção de telefones
	$id = "SELECT idcontato FROM contato WHERE email like '$email'";
	$executar_consulta = $conexao->query(utf8_encode($id));
	$row = $executar_consulta->fetch_assoc();
	$id = $row['idcontato'];

	$array = array();
	for ($i=0; $i < 3; $i++) {
		$telefone = ${'telefone' . $i};
		if (!empty($telefone)) {
			$array[] = $telefone;
		}
	}

	foreach ($array as $key => $value) {
		$telefone = $value;
		$consulta = "INSERT INTO `telefone` (`idcontato`,`idtelefone`,`telefone`) VALUES ($id, NULL, $telefone)";
		$executar_consulta2 = $conexao->query(utf8_encode($consulta));
	}


	if($executar_consulta and $executar_consulta2)
		$mensagem = "O contato " .utf8_encode($nome). " foi registrado";
	else
		$mensagem = "Não foi possível registrar o contato " .utf8_encode($nome). ".";

	}	else{
		$mensagem = "O registro não será feito, pois este contato já está cadastrado!";
	}

$conexao->close();

session_start();
$_SESSION['mensagem'] = $mensagem;
header("Location: ../../index.php");

?>
