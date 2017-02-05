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
	@$roll=$_GET['roll'];
	if (isset($roll)) {
	$query_1 = "select * from register where rollno = '$roll'"; 
	$result_1 = $connection-> query($query_1);
	$line_1 = mysqli_fetch_array($result_1);
	}

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
	background-color: #333;
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
			<div class="col s3 l3 m3 offset-l1">
			    <button type="button"class="waves-effect waves-light btn" onclick="location.href='register.php'">HOME</button>

			</div>
			<div class="col s3 l6 m3"><h3 class="upload" style="font-family:pacifico;font-size:500%;color:#707070">Yearbook'16</h3><br>
			<p class="box2">Write about your friends!</p> 
				<form action="viewsfriend.php" onSubmit="alert('Your views will be added in his yearbook after his registration and approval');" method="POST">
				<div class="box4">
					<div class="row">
						<div class="col l6 m6 s12">
							<label for="froll">Roll Number</label>
							<input name="froll" autofocus placeholder="Your friend's Roll Number" type="text" required value="<?php  echo @$line_1['rollno']; ?>">

						</div>
						<div class="col l6 m6 s12">
							<label for="fname">Name</label>
							<input name="fname" id="fname" autofocus placeholder="Your friend's name" type="text" required value="<?php  echo @$line_1['name']; ?>">

						</div>
					</div>
					<div class="row">
						<div class="col l12 m12 s12">
							<label for="textarea2">Write Here!</label>

							<textarea id="textarea2" name="viewf" placeholder="Write Here!" class="materialize-textarea"></textarea>
						</div>
					</div>
					<center>
					<button class="btn waves-effect waves-light" type="submit">submit</button></center>
				</div>
			</form>

</div>
<div class="col l2 s3 m3 ">
    <button type="button"class="waves-effect waves-light btn" onclick="location.href='login.php'">LOGOUT </button>


</div>
		</div>
		
	</div>
</body>
</html>