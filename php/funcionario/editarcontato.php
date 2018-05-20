<form class="card" id="editar-contato" name="editar_frm" action=
"php/funcionario/editar-contato.php" method="post" enctype="multipart/form-data">
	<div class="form-group card-body">
		<fieldset>
			<legend>Editar Contato</legend>
			<?php
				if($_GET["contato_slc"]!=null){
					include("conexao.php");
					$conexao2 = conectar();
					
					$contato = $_GET["contato_slc"];

					$consulta_contato = "SELECT * FROM contatos WHERE 
					id='$contato'";
					
					
					$executar_consulta_contato = $conexao2->query($consulta_contato);
					$registro_contato = $executar_consulta_contato->fetch_assoc();
					
					include("editar-form.php");
				}
			?>
		</fieldset>
	</div>
</form>	