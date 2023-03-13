<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Entrar</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
</head>
<body>
<?php
require('includes/db.php');
session_start();

if (isset($_POST['username'])){
       
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `usuarios` WHERE username='$username'
		and password='".md5($password)."' and rank = '1'";
		$result = mysqli_query($con,$query) or die();
		$rows = mysqli_num_rows($result);

        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index.php");
		} else{
		echo "<div class='container'> <div class='boxsucess'>
                <h3>Usuário e senha incorretos.</h3>
                <br>Clique aqui para <a href='login.php'>logar</a></div></div>";
	}
    }else{
?>

<div class="container">
<div class="box">
<br>
<h1>Entrar</h1><br>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Usuário" required /> <br>
<input type="password" name="password" placeholder="Senha" required /> <br>
<input name="submit" type="submit" value="Entrar" /> <br>
</form><br>
<p>Não possui conta? <a href='register.php'>Cadastre-se</a></p>
</div>
</div>

<?php } ?>
</body>
</body>
</html>