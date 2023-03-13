<?php
require('includes/db.php');
include("includes/auth.php");
require 'menu.php'
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Novo chamado</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
	<!-- Importar os ícones do Font Awesome -->
	<script src="https://kit.fontawesome.com/3b3d3b4e96.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="form">
		<br>
	     <h2>Abrir novo chamado</h2>
	     <p>Escreva abaixo com o máximo de detalhes possível a sua solicitação</p>

	     <textarea rows="12" class="form-control" id="result" spellcheck="false"></textarea>

	     <br>

	     <button class="btn btn-lg btn-warning" onclick="executar()">Enviar</button>
</div>
</body>
</html>