
<?php
session_start();
include 'connection.php';
$value1=$_SESSION['rollno'];
$value2=$_SESSION['dob'];
$value3=$_POST['department'];
$value4=$_POST['HOR'];
//$value5=$_POST['YOG'];
$value6=$_POST['course'];
$value7=$_POST['email'];
$value8=$_POST['phone'];
$_SESSION['department'] = $value3;
$_SESSION['HOR'] = $value4;
//$_SESSION['YOG'] = $value5;
$_SESSION['course'] = $value6;
$_SESSION['email'] = $value7;
$_SESSION['phone'] = $value8;
$result = $connection->query("SELECT * FROM register WHERE rollno='$value1' AND dob='$value2'");
$num_rows =  $result->num_rows;


	$sql="UPDATE register
	SET department='$value3', HOR='$value4',course='$value6',email='$value7',phone='$value8'
	WHERE rollno='$value1' AND dob='$value2'"; 
	$res = $connection->query($sql);
	if(!$res)
	{
		die("error:" .mysql_error());
	}
	header('Location:register.php');
	mysql_close();


?>
