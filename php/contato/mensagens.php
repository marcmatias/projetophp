<?php
session_start();
$mensagem = $_SESSION['mensagem'];
if($mensagem){
	echo "<script type='text/javascript'>
		$.toaster({ priority : 'info', title : 'Alerta', message : '$mensagem'});
	</script>"
	;
}
session_destroy();
?>
