
<?php
define('DB_NAME','yearbook');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$link)
{
	die('could not connect:' .mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
echo "connection successful";
$value1=$_POST['rollno'];
$value2=$_POST['dob'];

$sql="INSERT IGNORE INTO register(rollno,dob) VALUES ('$value1','$value2')";
if(!mysql_query($sql))
{
	die("error:" .mysql_error());
}
header('profile.html');
mysql_close();

?>