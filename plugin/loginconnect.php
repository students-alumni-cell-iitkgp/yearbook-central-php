
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
$result = $connection->query("SELECT id FROM register WHERE rollno = '$value1' AND dob='$value2'");
if( $result->num_rows == 0) 
{
	echo 'NOT ELIGIBLE';
} else 
{
	$sql="UPDATE register
	SET rollno='$value1',dob='$value2' WHERE rollno='$value1' AND dob='$value2'";
	header('Location:register.php');

}




?>