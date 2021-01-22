<?php

$acao = $_POST['acao'];

if($acao == "enviar-contato"){
	
	
	$message = '<b>Nome: </b>'. $_POST['nome']." <br/>";
	$message .= '<b>Email: </b>'. $_POST['email']." <br/><br/>";
	$message .= '<b>Assinto: </b>'. $_POST['assunto']." <br/>";
	$message .= '<b>Mensagem: </b><br/>'. $_POST['mensagem'];
	
	
	$headers = "From: Site - Erickson <erickson@ericksontavares.com.br>\r\n".
               "MIME-Version: 1.0" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 

	$ok = mail("essinho.sousa@gmail.com", "CONTATO - EricksonTavares.com.br", $message, $headers);
	print $ok? 1 : 0 ;
	
}

?>