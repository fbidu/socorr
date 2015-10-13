<!DOCTYPE html>
<html>
<head>
	<title>Socorr</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="theme.css">
</head>
<body>
<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="header">
		<h1 class="title">Socorr!</h1>
		<p class="subtitle">
		Você perde coisas pela UNICAMP? Você nunca se lembra de consultar no site/aplicativo de "achados e perdidos" da vigilância do campus? Crie seu cadastro aqui que a gente te avisa se algum documento seu for encontrado!
		</p>
	</div>
	<div class="about">
		<h2 class="subtitle">Como funciona?</h2>
		<ol>
			<li>Você perde um documento seu <i class="fa fa-frown-o"></i></li>
			<li>Alguém o encontra e entrega para um funcionário da UNICAMP <i class="fa fa-users"></i></li>
			<li>Até o fim do dia, esse documento é entregue para a Vigilância<i class="fa fa-building"></i></li>
			<li>Esse documento é cadastrado no <a href="http://sap.prefeitura.unicamp.br/sap/pesquisa_achados_perdidos.jsf">Sistema de Achados e Perdidos</a> <i class="fa fa-plus-square"></i></li>
			<li>Diariamente, o <strong>Socorr!</strong> procura pelo seu nome nesse sistema<i class="fa fa-search"></i></li>
			<li>Caso encontre, ele te manda um e-mail e você busca seu documento<i class="fa fa-smile-o"></i></li>
		</ol>
	</div>
	<div class="login">
		<h2 class="subtitle">Quero me cadastrar!</h2>
		<form role="form">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon" id="name-description"><i class="fa fa-user"></i></span>
    				<input type="text" class="form-control" id="name" placeholder="Seu nome completo - conforme está em seus documentos" aria-describedby="name-description">
    			</div>
  			</div>
  			<div class="form-group">
  				<div class="input-group">
					<span class="input-group-addon" id="email-description"><i class="fa fa-envelope"></i></span>
    				<input type="email" class="form-control" id="email" placeholder="Seu e-mail - mandaremos notificações para ele, caso algo seja encontrado" aria-describedby="email-description">
    			</div>
  			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon" id="password-description"><i class="fa fa-key"></i></span>
 					<input type="password" class="form-control" id="password" placeholder="Escolha uma senha - mínimo de 6 caracteres - para que você faça login e veja seu histórico de notificações" aria-describedby="password-description">
 				</div>
  			</div>
  			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon" id="password-confirmation-description"><i class="fa fa-key"></i></span>
 					<input type="password" class="form-control" id="password-confirmation" placeholder="Confirme sua senha" aria-describedby="password-confirmation-description">
 				</div>
  			</div>
  			<div class="form-group">
				<button type="submit" class="btn btn-default">Socorr!</button>
			</div>
		</form>

	</div>

</div>
<div class="col-md-3"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>