<form class="card" id="editar-contato" name="editar_frm" action=
"php/contato/editar-contato.php" method="post" enctype="multipart/form-data">
	<div class="form-group card-body">
		<fieldset>
			<legend>Editar Contato</legend>
			<?php
				if($_GET["contato_slc"]!=null){

					include("conexao.php");
					$conexao2 = conectar();

					$contato = $_GET["contato_slc"];

					$consulta_contato = "SELECT * FROM contato WHERE idcontato='$contato'";
					$executar_consulta_contato = $conexao2->query($consulta_contato);
					$registro_contato = $executar_consulta_contato->fetch_assoc();

					$consulta_telefone = "SELECT * FROM telefone WHERE idcontato='$contato'";
					$executar_consulta_telefone = $conexao2->query($consulta_telefone);
					// $registro_telefone = $executar_consulta_telefone->fetch_assoc();
					include("editar-form.php");
				}
			?>
		</fieldset>
	</div>
</form>
