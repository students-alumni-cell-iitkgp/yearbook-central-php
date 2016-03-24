<?php
	
	require 'connection.php';
	session_start();
	if (isset($_SESSION['rollno'])) {
		
	}else{
  		echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
	}
	$value1=$_SESSION['rollno'];
	$query = "select * from register where rollno = '$value1'"; 
	$result = mysql_query($query); 
	$line = mysql_fetch_array($result, MYSQL_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<style>


body
{
	background-image: url('bck.jpg');
	background-size: cover;
}
.toggle{
	display: none;
}
 @font-face {
     font-family:pacifico;
     src: url('Pacifico.ttf');
 }
 .btn
 {
 	text-transform: lowercase;
 	font-family: pacifico;
 }


</style>
</head>
<body>
	<div class="container">
		<div class="fixed-action-btn" style="bottom: 45px; right: 260px;">
			<a class="btn-floating btn-large waves-effect waves-light red" href="register.php"><i class="material-icons">home</i></a>
		</div>
		<table class="highlight">
	        <thead>
	          <tr>
	              <th data-field="rollno">Roll No.</th>
	              <th data-field="name">Name</th>
	              <th data-field="views">Views</th>
	          </tr>


	        </thead>

	        <tbody>
	          <?php
	          	$dept = $line['department'];
	          	$query_select = "select * from register where department = '$dept'";
	          	$query_select_run = mysql_query($query_select);
	          	while ($list = mysql_fetch_assoc($query_select_run)) {
	          		$list_students[] = $list;
	          	}
	          	echo '<form method="POST" action="department.php">';
	          	for($i=0;$i<count($list_students);$i++){
	          		echo '<tr><td>'.$list_students[$i]['rollno'].'</td><td>'.$list_students[$i]['name'].'</td><td>
	          			  
						    
						      <div class="row">
						        <div class="input-field col s12">
						          <input id="views" type="text" class="validate" name="views'.$i.'">
						          <label for="views" data-error="wrong" data-success="right">Write your views here</label>
						        </div>
						      </div>
						    
						  
	          		</td></tr>';
	          	}
	          	echo '<center><input type="submit" class="btn waves-light"></center> </form>';
		        //if(isset($_POST['views'.$i.''])){ 
		          	for($i=0;$i<count($list_students);$i++){
		          		//$query_save_views = "insert into views values ('', ".$line['rollno'].", ".$list_students[$i]['rollno'].", 'views".$i."')";	
		          		//$_POST['views'.$i.''] = 'default';
		          		if(isset($_POST['views'.$i.''])){
			          		if(!empty($_POST['views'.$i.''])){
				          		$views = $_POST['views'.$i.''];
				          		$rollno = $line['rollno'];
				          		$deptmate = $list_students[$i]['rollno'];
				          		$query_save_views = "insert into views values ('', '$rollno','$deptmate', '$views')";	
				          		$query_save_views_run = mysql_query($query_save_views);
				          		if ($i == count($list_students)-1) {
				          			echo '<script>alert("Your Views are submitted for approval by your Deptmates.")</script>'
				          			header('Location:register.php');
				          		}
				          	}else{
				          		if ($i == count($list_students)-1) {
				          			echo '<script>alert("Your Views are submitted for approval by your Deptmates.")</script>'
				          			header('Location:register.php');
				          		}
				          	}	
			          	}

		          	}
		         //}  	
	          ?>
	        </tbody>
      	</table>
	</div>
</body>
</html>
