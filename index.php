<?php 

session_start();

if(isset($_SESSION['user']))
	echo '<script>location.href="user"</script>';
else if(isset($_SESSION['admin']))
	echo '<script>location.href="admin"</script>';
else
	echo '<script>location.href="login.php"</script>';

 ?>