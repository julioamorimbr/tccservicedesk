<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Entrar</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    TCC
  </a>
  <a class="navbar-brand" href="#">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Cadastre-se
  </a>
  
</nav>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die();
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Usuário e senha incorretos.</h3>
<br/>Clique aqui para <a href='login.php'>logar</a></div>";
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
<p>Não possui conta? <a href='registration.php'>Cadastre-se</a></p>
</div>
</div>

<?php } ?>
</body>
</body>
</html>