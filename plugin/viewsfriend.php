<?php
session_start();
include 'connection.php';
$rollno=$_SESSION['rollno'];
echo "$rollno";
$depmate=$_POST['froll'];
$view=$_POST['viewf'];
$_SESSION['froll'] = $depmate;
$_SESSION['viewf'] = $view;

$sql="INSERT INTO views (user,deptmate,views)
VALUES ('$rollno','$depmate','$view')";
$success = $connection->query($sql);
if ($success) 
 header('Location:department1.php');
else
	echo mysql_error();
?>
