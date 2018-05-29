<!DOCTYPE html>
<?php include("php/checa-login.php"); ?>
<?php
	mb_internal_encoding("UTF-8");
	mb_http_output( "iso-8859-1" );
	ob_start("mb_output_handler");
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	// error_reporting(E_ALL ^ E_NOTICE);
	if (!empty($_GET)) {
		$op = $_GET["op"];
	}else $op = null;
	switch($op){
		case "add":
			$conteudo = "php/contato/addcontato-form.php";
			$titulo = "Adicionar Contatos";
			break;

		case "editar":
			$conteudo = "php/contato/editarcontato.php";
			$titulo = "Editar Contatos";
			break;

		case "consultas":
			$conteudo = "php/contato/consultas.php";
			$titulo = "Pesquisar Contatos";
			break;

		default :
			$conteudo = "php/contato/home.php";
			$titulo = "Catálogo Telefônico";
			break;
	}
?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $titulo; ?></title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="css/materialicons.css">
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- <script src="js/contato.js"> </script> -->
	</head>
	<body>
		<header id="conteudo">
			<nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
			  <a class="navbar-brand text-center" href="index.php">Catalogo Telefônico</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		        <ul class="navbar-nav ml-auto">
		            <li class="nav-item">
		                <a onclick="return confirm('Atenção! Clicando em Ok Você vai fazer logoff do sistema.')" class="config nav-item nav-link" href="php/logout.php">Sair <i class="material-icons" style="font-size:10px">arrow_forward_ios</i></a>
		            </li>
		        </ul>
			    </div>
			  </div>
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
		<script src="js/app.js"></script>
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
		    });
				$(document).ready(function() {
						$('.sonumero').on('keydown', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
				    function limpa_formulário_cep() {
				        $("#rua").val("");
				        $("#bairro").val("");
				        $("#cidade").val("");
				        $("#estado").val("");
				    }

				    $("#cep").blur(function() {

				        var cep = $(this).val().replace(/\D/g, '');
				        if (cep != "") {

				            var validacep = /^[0-9]{8}$/;
				            if(validacep.test(cep)) {
				                $("#rua").val("...");
				                $("#bairro").val("...");
				                $("#cidade").val("...");
				                $("#estado").val("...");
				                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

				                    if (!("erro" in dados)) {
				                        $("#rua").val(dados.logradouro);
				                        $("#bairro").val(dados.bairro);
				                        $("#cidade").val(dados.localidade);
				                        $("#estado").val(dados.uf);
				                    }
				                    else {
				                        limpa_formulário_cep();
				                        alert("CEP não encontrado.");
				                    }
				                });
				            }
				            else {
				                limpa_formulário_cep();
				                alert("Formato de CEP inválido.");
				            }
				        }
				        else {
				            limpa_formulário_cep();
				        }
				    });
				});
		</script>
		<?php include("php/mensagens.php");?>
	</body>
</html>
