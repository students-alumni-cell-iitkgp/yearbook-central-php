<?php 

session_start();
include 'connection.php';
if (isset($_SESSION['rollno'])) {
        
    }else{
  echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
    }
$id=$_GET['id'];
$roll=$_SESSION['rollno'];

$sql="SELECT * FROM writeup WHERE id='$id' ";
	$result =  $connection->query($sql); 
	$line = mysqli_fetch_array($result);
	$check=$line['rollno'];
if ($check!=$roll) {
	header('Location:index.php');
	die();

}
$sql5="DELETE FROM writeup WHERE id='$id' AND rollno='$roll'";

if(!$connection->query($sql5))
	{
		die("error:" .mysql_error());
	}
	header('Location:writeup.php');

mysql_close();
 ?>