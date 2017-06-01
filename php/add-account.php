<?php 

require 'connection.php';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];

$result = $link->query('SELECT id FROM users WHERE username = "'.$username.'" AND password = "'.$password.'"')
	or die ($link->error);

if($result->num_rows == 0) {
	$link->query('INSERT INTO users VALUES (NULL, "'.$name.'", "'.$lastname.'", "'.$email.'", "'.$username.'", "'.$password.'", "'.$type.'")') or die ($link->error);
	echo '<a href="../tempCreateAccounts.html">Regresar</a>';
}

 ?>