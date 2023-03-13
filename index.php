<?php
//include auth.php file on all secure pages
include("includes/auth.php");
require 'menu.php'
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
	<!-- Importar os ícones do Font Awesome -->
	<script src="https://kit.fontawesome.com/3b3d3b4e96.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="form">
<p>Bem-vindo(a) <?php echo $_SESSION['username']; ?>!</p>
<p>Essa é uma área segura.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Sair</a>
</div>
</body>
</html>