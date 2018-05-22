<?php
mb_internal_encoding("UTF-8");
mb_http_output( "iso-8859-1" );
ob_start("mb_output_handler");
header("Content-Type: text/html; charset=ISO-8859-1",true);
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];
switch($op){
	case "add":
		$conteudo = "php/funcionario/addcontato.php";
		$titulo = "Adicionar Contatos";
		break;

	// case "apagar":
	// 	$conteudo = "php/funcionario/apagarcontato.php";
	// 	$titulo = "Apagar Contatos";
	// 	break;

	case "editar":
		$conteudo = "php/funcionario/editarcontato.php";
		$titulo = "Editar Contatos";
		break;

	case "consultas":
		$conteudo = "php/funcionario/consultas.php";
		$titulo = "Pesquisar Contatos";
		break;

	default :
		$conteudo = "php/funcionario/home.php";
		$titulo = "Catálogo Telefônico";
		break;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $titulo; ?></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- <script src="js/contato.js"> </script> -->
	</head>
	<body>
		<header id="conteudo">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <a class="navbar-brand" href="index.php">Catalogo Telefônico</a>
			  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
					<li><a class="config nav-item nav-link" href="index.php"> Home </a></li>
					<ul class="navbar-nav">
					    <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Gerenciar
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="config dropdown-item" href="?op=add"> Adicionar Contato </a>
								<a class="config dropdown-item" href="?op=apagar"> Apagar Contato </a>
								<a class="config dropdown-item" href="?op=editar"> Editar Contato </a>
								<a class="config dropdown-item" href="?op=consultas"> Pesquisar Contato </a>
					        </div>
				        </li>
					</ul>
			    </div>
			  </div> -->
			</nav>
		</header>
		<main id="principal">
			<div class="container" id="container">
				<!-- conteúdo php principal da pagina inicial -->
				<?php include($conteudo); ?>
			</div>
		</main>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap4.min.js"></script>
		<script src="js/jquery.toaster.js"></script>
		<!-- Datatable e mensagens -->
		<script type="text/javascript">
		    $('#datatable').DataTable( {
		         "language": {
				    "sEmptyTable": "Nenhum registro encontrado",
				    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
				    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
				    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
				    "sInfoPostFix": "",
				    "sInfoThousands": ".",
				    "sLengthMenu": "_MENU_ resultados por página",
				    "sLoadingRecords": "Carregando...",
				    "sProcessing": "Processando...",
				    "sZeroRecords": "Nenhum registro encontrado",
				    "sSearch": "Pesquisar",
				    "oPaginate": {
				        "sNext": "Próximo",
				        "sPrevious": "Anterior",
				        "sFirst": "Primeiro",
				        "sLast": "Último"
				    },
				    "oAria": {
				        "sSortAscending": ": Ordenar colunas de forma ascendente",
				        "sSortDescending": ": Ordenar colunas de forma descendente"
				    }
				}
		    } );
		</script>
		<?php include("php/funcionario/mensagens.php");?>
	</body>
</html>
