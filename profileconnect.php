
<?php
define('DB_NAME','yearbook');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
include 'registerconnect.php';
$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link)
{
	die('could not connect:' .mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
$value3=$_POST['department'];
$value4=$_POST['HOR'];
$value5=$_POST['YOG'];
$value6=$_POST['course'];
$value7=$_POST['email'];
$value8=$_POST['phone'];

$sql="UPDATE register
 SET department='$value3', HOR='$value4',YOG='$value5',course='$value6',email='$value7',phone='$value8'
 WHERE rollno='$value2' AND dob='$value2'";
 if(!mysql_query($sql))
{
	die("error:" .mysql_error());
}
mysql_close();

?>
