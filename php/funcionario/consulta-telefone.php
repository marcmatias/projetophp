<div class="form-group card-body">
	<div class="form-group">
		<input type="hidden" name="op" value="consultas" />
		<label for="telefone">Telefone </label>
		<input type="telefone" id="telefone" class="config form-control" name="telefone_txt"
		placeholder="Escreva o telefone" title="Telefone" />
	</div>
	<input type="submit" id="enviar-buscar" class="config btn btn-primary float-right" name="enviar_btn"
value="Buscar" />
</div>	
<?php
if($_GET["telefone_txt"]!=null){
	$telefone=$_GET["telefone_txt"];
	$consulta = "SELECT * FROM contatos WHERE telefone like '%$telefone%'";
	include("tabela-resultados.php");
}
?>