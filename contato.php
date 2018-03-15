<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>G2 - Conta</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<?php 
		
	 ?>
	<main>
		<div class="container">
			<form>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Nome</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira seu nome completo">
			  </div>

			  <div class="form-group">
			    <label for="exampleFormControlInput1">Email</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
			  </div>

			  <div class="form-group">
			    <label for="exampleFormControlInput1">Assunto</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Assunto da mensagem">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Mensagem </label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
			  </div>
			  <input class="btn btn-primary" type="submit" value="Enviar Mensagem">
			</form>
		</div>
	</main>
</body>
</html>