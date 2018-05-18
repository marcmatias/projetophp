<script>
	window.onload = function()
	{
		var lista = document.getElementById("contato-lista");
		lista.onchange = selecionarContato;
		
		function selecionarContato()
		{
				window.location="?op=editar&contato_slc="+lista.value
		}
	}
</script>	
<?php include("php/funcionario/mensagens.php"); ?>
<form class="card" id="editar-contato" name="editar_frm" action=
"php/funcionario/editar-contato.php" method="post" enctype="multipart/form-data">
	<div class="form-group card-body">
		<fieldset>
			<legend>Editar Contato</legend>
			<div>
				<label for="contacto-lista">Contato: </label>
				<select id="contato-lista" class="cambio form-control" name="contato_slc" required>
					<option value="">-- Selecione o contato --</option>
					<?php include("select-email.php");?>
				</select>
			</div>
			<?php
				if($_GET["contato_slc"]!=null){
					$conexao2 = conectar();
					$contato = $_GET["contato_slc"];
					$consulta_contato = "SELECT * FROM contatos WHERE 
					email='$contato'";
					
					
					$executar_consulta_contato = $conexao2->query($consulta_contato);
					$registro_contato = $executar_consulta_contato->fetch_assoc();
					
					include("php/funcionario/editar-form.php");
				}
			?>
		</fieldset>
	</div>
</form>	