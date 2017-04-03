<?php   
session_start();
include '../connection.php';
    if (sha1($_SESSION['rollno'])!="7fa0ad2bc14c757bb2e94c5db055d350bfca8663") {
      echo '<script>alert("Authorised Users only");window.location.href="../index.php";</script>';
    }

	$query=$_POST['query'];
	echo $query."<br>";
	$query_run=0;
	$arr = explode(' ',trim($query));
	if ((strtolower($arr[0])=="delete")||(strtolower($arr[0])=="drop")) {
		die("These operation cant be done through admin panel");
	}
	$query_run=$connection->query($query);
	if ($query_run) {
		echo "Query Run Success<br>";
		echo "No of Rows returned:".$query_run->num_rows."<br><hr><table><th>Field1</th><th>Field2</th><th>Field3</th>";
	while ($list = mysqli_fetch_assoc($query_run)) {
?>
		<tr>
        <td><?php echo @$list[$_POST['field1']] ?></td>
        <td><?php echo @$list[$_POST['field2']] ?></td>
        <td><?php if ($_POST['field3']=="name") {
        		echo "<a href='download.php?id=../server/php/uploaded/".@$list[$_POST['field3']]."' >".@$list[$_POST['field3']]."</a>";
            } else {
            	echo @$list[$_POST['field3']];
        } ?>
        </tr>
<?php 
	}
	echo "</table>";
	}else
		echo "Query Run Failure <br>";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Query Page</title>
<style>
table, td, th {
    border: 1px solid black;
    padding: 10px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
</style>
</head>
<body>
<a href="index.php"><br><hr>Go Back</a>
</body>
</html>