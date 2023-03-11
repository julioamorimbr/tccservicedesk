<?php
require('db.php');
include("auth.php");
require 'menu.php'
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
	<!-- Importar os ícones do Font Awesome -->
	<script src="https://kit.fontawesome.com/3b3d3b4e96.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>Essa é outra página segura.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Sair</a>
</div>
</body>
</html>