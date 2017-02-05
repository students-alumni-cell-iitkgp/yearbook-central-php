
<?php
session_start();
include 'connection.php';
	session_start();
	if (isset($_SESSION['rollno'])) {
		
	}else{
	echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
	}
	$value1=$_SESSION['rollno'];
	$motto=$_POST['motto'];
	$query=$connection->query("UPDATE register
	SET view_self='$motto'	WHERE rollno='$value1'");
	header('Location:register.php');




?>