
<?php
define('DB_NAME','yearbook');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
session_start();

$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link)
{
	die('could not connect:' .mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
$value1=$_POST['rollno'];
$value2=$_POST['dob'];
$value3=$_POST['department'];
$value4=$_POST['HOR'];
$value5=$_POST['YOG'];
$value6=$_POST['course'];
$value7=$_POST['email'];
$value8=$_POST['phone'];
$result = mysql_query("SELECT * FROM register WHERE rollno='$value1' AND dob='$value2'");
$num_rows = mysql_num_rows($result);

if ($num_rows > 0) {
	$sql="UPDATE register
	SET rollno='$value1',dob='$value2',department='$value3', HOR='$value4',YOG='$value5',course='$value6',email='$value7',phone='$value8'
	WHERE rollno='$value1' AND dob='$value2'"; 
	if(!mysql_query($sql))
	{
		die("error:" .mysql_error());
	}
	else echo "Submitted successfully";
}
else {
	$sql2="INSERT INTO register
	SET rollno='$value1',dob='$value2',department='$value3', HOR='$value4',YOG='$value5',course='$value6',email='$value7',phone='$value8'";
if(!mysql_query($sql2))
	{
		die("error:" .mysql_error());
	}	else echo "Submitted successfully";

}
header('Location:index.html');

mysql_close();

?>
