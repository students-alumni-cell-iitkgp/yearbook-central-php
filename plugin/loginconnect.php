
<?php
session_start();
include 'connection.php';
$value1=$_POST['rollno'];
$value2=$_POST['dob'];
$value1_hash=sha1($value1);
$value2_hash=sha1($value2);
if ($_POST['rollno']) {
	$_SESSION['rollno'] = $_POST['rollno'];
}
$_SESSION['rollno'] = $value1;
$_SESSION['dob'] = $value2;
$result = $connection->query("SELECT id FROM register WHERE rollno = '$value1' AND dob='$value2'");
if( $result->num_rows == 0) 
{	
	if (($value1_hash=='d033e22ae348aeb5660fc2140aec35850c4da997')&&($value2_hash='be209103de3f7b2614941bd679b1a6f920411435')) {
		header('Location:admin/');

	}else
	echo 'You are not Registered in Graduating Batch';
} else 
{
	
	header('Location:details.php');

}




?>
