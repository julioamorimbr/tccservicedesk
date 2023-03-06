<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
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