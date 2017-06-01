<?php 

session_start();

if(isset($_SESSION['user']))
	echo '<script>location.href="user"</script>';
else if(isset($_SESSION['admin']))
	echo '<script>location.href="admin"</script>';

 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ingresar</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
	<style>
		section {
			width: 50vw;
			height: 50vh;
			margin: 25vh 25vw;
		}

		h1 {
			text-align: center;
		}
	</style>
	<body>
		<section class="login-form">
			<h1 class="page-header">Iniciar sesión</h1>
			<form action="php/validate-data.php" method="post">
				<label for="#username">Nombre de usuario:</label>
				<div class="input-group"><span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span><input type="text" class="form-control" id="username" name="username"></div>
				<label for="#password">Contraseña:</label>
				<div class="input-group"><span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span><input type="text" class="form-control" id="password" name="password"></div>
				<br>
				<button class="btn btn-block">Ingresar</button>
				<center>
					<a href="tempCreateAccounts.html">Crear cuentas</a>
				</center>
			</form>
		</section>
	</body>
</html>