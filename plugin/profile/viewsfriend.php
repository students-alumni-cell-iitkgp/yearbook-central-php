<?php
session_start();
include '../connection.php';
$rollno=$_SESSION['rollno'];
echo "$rollno";
$depmate=mysqli_real_escape_string($connection,$_POST['froll']);
$view=mysqli_real_escape_string($connection,$_POST['viewf']);
$_SESSION['froll'] = $depmate;
$_SESSION['viewf'] = $view;

$sql="INSERT INTO views (user,deptmate,views)
VALUES ('$rollno','$depmate','$view')";
$success = $connection->query($sql);
if ($success) 
 header('Location:../search/index.php');
else
	echo mysql_error();
?>
