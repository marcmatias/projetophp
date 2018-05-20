<form id="home" name="home_frm" action=
"php/funcionario/home.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend class="text-center">Início</legend>
		<div class="text-center">
			<p>Bem vindo ao catálogo telefônico!</p>
		</div>
		<!-- menssagens -->
		<?php include("php/funcionario/mensagens.php");?>
		<a href="index.php?op=add" class="btn btn-primary text-left" style="margin-left: 15px">Adicionar Contato</a>
		<span class="text-center">
			<?php 
				$consulta = "SELECT * FROM contatos";
				include("php/funcionario/tabela-resultados.php");
			?>
		</span>
	</fieldset>
</form>