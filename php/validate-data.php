<?php

require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = $link->query('SELECT id, type FROM users WHERE username = "'.$username.'" AND password = "'.$password.'"')
	or die ($link->error);
	$link->close();


if($result->num_rows == 1) {
	session_start();
	$values = $result->fetch_assoc();
	$_SESSION[$values['type']] =  $values['id'];
	echo '<script>location.href = "../'.$values['type'].'";</script>';
} else {
	echo '<script>alert("Error al iniciar sesión.");location.href = "../index.php";</script>';
}

 ?>