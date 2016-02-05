
<?php
session_start();
include 'connection.php';
$value1=$_POST['rollno'];
$value2=$_POST['dob'];
if ($_POST['rollno']) {
    $_SESSION['rollno'] = $_POST['rollno'];
    }
    $_SESSION['rollno'] = $value1;
$_SESSION['dob'] = $value2;
$sql="INSERT IGNORE INTO register
	SET rollno='$value1',dob='$value2'";
if(!mysql_query($sql))
	{
		die("error:" .mysql_error());
	}	else echo "Submitted successfully";


header('Location:register.php');


?>
