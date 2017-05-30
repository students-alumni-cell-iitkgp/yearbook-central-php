<?php
session_start();
include 'connection.php';

$value1=$_SESSION['rollno'];
$writeup=mysqli_real_escape_string($connection,$_POST['writeup']);
$topic=mysqli_real_escape_string($connection,$_POST['topic']);
$sql5="INSERT INTO writeup SET rollno='$value1',writeup='$writeup',topic='$topic'";
if(!$connection->query($sql5))
	{
		die("error:" .mysql_error());
	}
	header('Location:writeup.php');

mysql_close();
?>