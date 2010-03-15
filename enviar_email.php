
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Contato</title>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style> article, aside, figure, footer, header, hgroup, menu, nav, section { display: block; } </style>
	
</head>
<body>
	<div class="container">
		<h1>Contato</h1>
		
		<?php 
			error_reporting(0);
			$email= 'tesmkt@gmail.com';
			$assunto= $_POST['assunto'];
			$mensagem= $_POST['mensagem'];
	
			if ( mail( $email, $assunto, $mensagem ) ):
			
		?>		
		
			<p>Seu e-mail foi enviado!</p>
		
		<?php else: ?>
		
			<p>Seu e-mail não foi enviado... Burra!!!</p>
		
		<?php endif; ?>
			
	</div>
</body>
</html>