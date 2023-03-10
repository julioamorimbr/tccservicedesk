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
	<!-- Importar o jQuery e o Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Importar os ícones do Font Awesome -->
	<script src="https://kit.fontawesome.com/3b3d3b4e96.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">TCC</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link active" href="#"><i class="fas fa-home"></i> Página Inicial</a>
				</li>
                <li class="nav-item">
					<a class="nav-link active" href="dashboard.php"><i class="fas fa-home"></i> Visão geral</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-chart-pie"></i> Chamados</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-chart-pie"></i> Abrir chamado</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-chart-pie"></i> Relatórios</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-chart-pie"></i> Departamentos</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-chart-pie"></i> S.D.I</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Configurações</a>
						<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
<div class="form">
<p>Bem-vindo(a) <?php echo $_SESSION['username']; ?>!</p>
<p>Essa é uma área segura.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Sair</a>
</div>
</body>
</html>