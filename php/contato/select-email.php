<?php
//arquivo de conexao com o BD
include("conexao.php");
//consulta para buscar emails no banco
$consulta = "SELECT email FROM contato ORDER BY email";

$executar_consulta = $conexao->query($consulta);
//percorrer os recursos gerados na consulta anterior
while($registro = $executar_consulta->fetch_assoc()){

		/*
		echo "<option value='".utf8_encode($registro["email"])."'>".
		utf8_encode($registro["email"])."</option>";
		*/
	echo "<option value='".utf8_encode($registro["email"])."'";
	if($_GET["contato_slc"]==$registro["email"]){
		echo " selected";
	}
	echo ">".utf8_encode($registro["email"])."</option>";
}
//$conexao->close();
?>
