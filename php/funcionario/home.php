<form id="home" name="home_frm" action=
"php/funcionario/home.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend class="text-center">Início</legend>
		<div class="text-center">
			<?php 
				//$consulta = "SELECT * FROM contatos";
				//include("php/funcionario/tabela-resultados.php");
				echo "Bem vindo ao catálogo telefônico! Por favor, escolha uma das opções acima."
			?>

			<?php 
				$consulta = "SELECT * FROM contatos";
				include("php/funcionario/tabela-resultados.php");
			?>
		</div>


