<?php 

	$email= 'tesmkt@gmail.com';
	$assunto= $_POST['assunto'];
	$mensagem= $_POST['mensagem'];
	
	@mail ('tesmkt@gmail.com','Enviar email pelo php',' Hello')

?>