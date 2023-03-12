<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Criar conta</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
</head>
<body>
<?php
require('db.php');
$rankuser = 1;
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
        $dtnasc = stripslashes($_REQUEST['dtnasc']);
	$dtnasc = mysqli_real_escape_string($con,$dtnasc);
        $nome = stripslashes($_REQUEST['nome']);
	$nome = mysqli_real_escape_string($con,$nome);
        $sobrenome = stripslashes($_REQUEST['sobrenome']);
	$sobrenome = mysqli_real_escape_string($con,$sobrenome);
        $empresa = stripslashes($_REQUEST['empresa']);
	$empresa = mysqli_real_escape_string($con,$empresa);
        $setor = stripslashes($_REQUEST['setor']);
	$setor = mysqli_real_escape_string($con,$setor);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $rank = stripslashes($rankuser);
	$rank = mysqli_real_escape_string($con,$rank);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `usuarios` (username, password, email, trn_date, dtnasc, nome, sobrenome, empresa, setor, rank)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$dtnasc', '$nome', '$sobrenome', '$empresa', '$setor', '$rank')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='container'> <div class='boxsucess'>
                <h3> Você foi cadastrado com sucesso. </h3>
                <br> Clique aqui para <a href='login.php'>logar</a></div></div>";
        }
    }else{
?>
<div class="container">
<div class="box">
<br>
<h1>Cadastro</h1>
<form name="registration" action="" method="post">
<input type="text" name="nome" placeholder="Nome" required />
<input type="text" name="sobrenome" placeholder="Sobrenome" required /><br>
<input type="text" name="username" placeholder="Usuário" required />
<input type="email" name="email" placeholder="E-mail" required /><br>
<input type="password" name="password" placeholder="Senha" required />
<input type="password" name="password" placeholder="Repita a senha" required /><br>
<p><input type="text" name="empresa" placeholder="Empresa" required />
<input type="text" name="setor" placeholder="Setor" required /></p>
<p> Data de nascimento: <input type="date" name="dtnasc" placeholder="Data de Nascimento" required /></p>
<input type="submit" name="submit" value="Criar conta" /><br>
<p>Já possui uma conta? <a href='login.php'>Logar</a></p>
</form>
</div>
</div>
</div>
<?php } ?>
</body>
</html>