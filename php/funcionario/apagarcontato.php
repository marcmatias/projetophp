<?php include("php/funcionario/mensagens.php");?>

<form class="card" id="apagar-contato" name="apagar_frm" action=
"php/funcionario/apagar-contato.php" method="post" enctype=
"application/x-www-form-urlencoded">
	<div class="form-group card-body">
		<fieldset>
			<legend>Apagar Contatos</legend>
			<div class="form-group">
				<label for="email">Selecione e-mail do contato que deseja excluir: </label>
				<select id="email" class="config form-control" name="email_slc" class="form-control" required>
					<option value="">-- Selecione e-mail --</option>
					<?php include("select-email.php"); ?>
				</select>
			</div>
			<div class="float-right">
				<input class="btn btn-danger" type="submit" id="enviar-apagar" classe="config" name="enviar_bnt"
				value="Deletar" />
			</div>	
		</fieldset>
	</div>
</form>	