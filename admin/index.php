<?php 

require '../php/connection.php';

session_start();

if(empty($_SESSION['admin']))
	echo '<script>location.href="../"</script>';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>title</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<nav class="closed">
		<div id="nav-toggle"><i class="fa fa-bars fa-2x"></i></div>
		<div class="profile">
			<div class="user-photo"></div>
			<div class="user-name">
				<?php

				$result = $link->query('SELECT name, lastname FROM users WHERE id = '.$_SESSION['admin']) or die ($link->error);
				$link->close();
				if($result->num_rows == 1) {
					$values = $result->fetch_assoc();
					echo '<a href="profile.php">'.$values['name'].' '.$values['lastname'].'</a>';
				}

				 ?>
			</div>
		</div>
		<ul>
			<li><a href=""><div><i class="fa fa-home fa-2x"></i><span>Inicio</span></div></a></li>
			<li><a href=""><div><i class="fa fa-ticket fa-2x"></i><span>Tickets</span></div></a>
			<i id="toggle-menu" class="fa fa-caret-down fa-3x down-caret"></i>
				<ul>
					<li><a href="#"><div><i class="fa fa-lock fa-2x"></i><span>Urgentes</span></div></a></li>
					<li><a href="#"><div><i class="fa fa-lock fa-2x"></i><span>Importante</span></div></a></li>
					<li><a href="#"><div><i class="fa fa-lock fa-2x"></i><span>Poco urgentes</span></div></a></li>
				</ul>
			</li>
			<li><a href=""><div><i class="fa fa-envelope fa-2x"></i><span>Mensajes</span></div></a></li>
		</ul>
		<ul class="down">
			<li><a href=""><div><i class="fa fa-user-plus fa-2x"></i><span>Agregar usuarios</span></div></a></li>
			<li><a href=""><div><i class="fa fa-sign-out fa-2x"></i><span>Salir</span></div></a></li>
		</ul>
	</nav>
	<section class="container">
	</section>
	<footer>
		<script>
			document.write(Date());
		</script>
	</footer>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>