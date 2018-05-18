<div class="form-group card-body">
	<div class="form-group">
		<input type="hidden" name="op" value="consultas" />
		<label for="email">Email: </label>
		<input type="email" id="email" class="config form-control" name="email_txt"
		placeholder="Escreva o email" title="Email"                  />
	</div>
	<input type="submit" id="enviar-buscar" class="config btn btn-primary float-right" name="enviar_btn"
value="Buscar" />
</div>	


<?php
if($_GET["email_txt"]!=null){
	$email=$_GET["email_txt"];
	$consulta = "SELECT * FROM contatos WHERE email like '%$email%'";
	include("tabela-resultados.php");
}
?>
	