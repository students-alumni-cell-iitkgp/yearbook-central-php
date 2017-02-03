<?php
	ob_start();
	require 'connection.php';
	session_start();
	if (isset($_SESSION['rollno'])) {
		
	}else{
  		echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
	}
	$value1=$_SESSION['rollno'];
	$query = "select * from register where rollno = '$value1'"; 
	$result = $connection-> query($query); 
	$line = mysqli_fetch_array($result);

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
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
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

td.roll,td.name,th.roll,th.name
{
	width: 150px;
	padding-left: 40px;
}
td.views
{
	width: 200px;
}
.box2
	{
		color: #707070;
		font-family: 'pacifico';
		font-size: 30px;
	}
.box4
	{
		margin-left: -60px;
	}
</style>
</head>
<body>
	<div class="container">
<div class="row">
			<div class="col s3 l3 m3  " >
			    <button type="button" class="waves-effect waves-light btn" style="position:relative;left:30px;" onclick="location.href='register.php'">HOME</button>

			</div>
			<div class="col s3 l6 m3"><h3 class="upload"style="position:relative;left:50px;font-family:pacifico;font-size:500%;color:#707070">Yearbook'16</h3><br></div>
			<div class="col s3 l3 m3">
    <button type="button"class="waves-effect waves-light btn" style="position:relative;left:90px;" onclick="location.href='login.php'">LOGOUT </button>


</div>
</div>
<div class="row">			
		<div class="col s6 l6 m6" style="position:relative;left:20px;">
				<form action="department1.php" method="POST">
							<p class="box2" style="text-align:center;">Write about your friends!</p> 

				<div class="box4" >
					
					
					<center><br/><br/>
					<button class="btn waves-effect waves-light" type="submit">Write</button></center>
				</div>
			</form>
		</div>
		<div class="col s6 l6 m6" style="position:relative;left:8px;">
			<form action="views_approval.php">
										<p class="box2" style="position:relative;left:-30px;text-align:center;">Approve what your friends have written!</p> 
	<div class="box4" >
		<center><button type="submit"class="waves-effect waves-light btn special" >Approve </button></center>
		</div>
		</form>
		</div>		
</div>

		
	
	</div>
</body>
</html>
