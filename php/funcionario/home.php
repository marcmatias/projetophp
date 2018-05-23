<fieldset>
	<legend class="text-center">Catálogo Telefônico</legend>

	<!-- <div class="text-center">
		<p>Bem vindo ao catálogo telefônico!</p>
	</div> -->
	<!-- menssagens -->

	<a href="index.php?op=add" class="btn btn-primary text-left" style="margin-left: 15px">Adicionar Contato</a>
	<span class="text-center">
		<?php
			$consulta = "SELECT * FROM contato";
			include("php/funcionario/tabela-resultados.php");
		?>
	</span>
</fieldset>
