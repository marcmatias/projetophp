<?php

if(isset($_SESSION['mensagem']) && !empty($_SESSION['mensagem'])) {
   $mensagem = $_SESSION['mensagem'];
	 if($mensagem){
	 	echo "<script type='text/javascript'>
	 		$.toaster({ priority : 'info', title : 'Alerta', message : '$mensagem'});
	 	</script>";
	 }
}else $_SESSION['mensagem'] = null;
unset($_SESSION['mensagem']);
?>
