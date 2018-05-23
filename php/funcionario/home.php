<fieldset>
	<legend class="text-center">Catálogo Telefônico</legend>

	<!-- <div class="text-center">
		<p>Bem vindo ao catálogo telefônico!</p>
	</div> -->
	<!-- menssagens -->

	<a href="index.php?op=add" id="btnnovo" title="Novo Contato" class="btn btn-primary"><i class="material-icons icons">add_circle</i> Novo</a>
	<span class="text-center">
		<?php
			$consulta = "SELECT * FROM contato";
			include("php/funcionario/tabela-resultados.php");
		?>
	</span>
</fieldset>
