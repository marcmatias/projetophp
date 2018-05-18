<?php
if(isset($_GET["mensagem"])){
	$mensagem = $_GET["mensagem"];
	
	echo "<div id='menssagem' class='alert alert-primary'> $mensagem </div>";
}

?>	
	