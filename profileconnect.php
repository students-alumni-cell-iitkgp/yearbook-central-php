
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
$value3=$_POST['department'];
$value4=$_POST['HOR'];
$value5=$_POST['YOG'];
$value6=$_POST['course'];
$value7=$_POST['email'];
$value8=$_POST['phone'];

$sql="INSERT INTO register(department,HOR,YOG,course,email,phone) VALUES ('$value3','$value4','$value5','$value6','$value7','$value8')";
if(!mysql_query($sql))
{
	die("error:" .mysql_error());
}
mysql_close();

?>
