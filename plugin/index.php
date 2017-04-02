<?php 
session_start();
session_destroy();
 ?>
<html>
<head>
    <link rel="icon" href="../ind/fav.png" type="image/png" >
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">
		<title>Yearbook</title>
</head>

<style>
 @font-face {
  font-family: 'Century gothic';
  src: url('font.ttf');
}
 	.container-fluid
	{
		position: absolute;
		top: 0;
		text-align: center;
      font-family: Century gothic;

	}
	.container1
	{
		background-color: transparent;
		padding:40px;
		height: 100px;
	}
	.heading
	{
		text-align: center;
		font-size: 350%;
	}
	.box
	{
		margin-top: 300px;
		color: #707070;
		font-size: 20px;
	}
	#heading{
		background-color: black;
		opacity: 0.5;
		position: absolute;
		left: 0 !important;
		right: 0 !important;
	}
	.large-header {
	position: relative;
	width: 100%;
	background: #333;
	overflow: hidden;
	background-size: cover;
	background-position: center center;
	z-index: 1;
}

.main-title {
	position: absolute;
	margin: 0;
	padding: 0;
	color: #f9f1e9;
	text-align: center;
	font-size: 40px;
	top: 15%;
	left: 50%;
	-webkit-transform: translate3d(-50%,-50%,0);
	transform: translate3d(-50%,-50%,0);
}
.sub-title{
	position: absolute;
	top: 90%;
	font-size: 20px;
}
.form{
	position: absolute;
	top: 35%;
}
a{
	color: #fff;
}
a span {display: none;  color: #fff; background: #000; padding: 5px;margin-bottom: 80px;font-size: 15px;}
a {position: relative;}
a:hover span {display: block; text-align: center;z-index: 1000;}

</style>
<body>
<div class="container-fluid">
	<div id="large-header" class="large-header" style="height: 613px; z-index: 100">
			<canvas id="demo-canvas" width="1366" height="613"></canvas>

			<h2 class="center main-title animated zoomIn">Welcome to<b> Yearbook'17</b> Portal </h2>

			<form method="post" action="loginconnect.php" class="form main-title center">

			<div class="row"> <br> <br> <br>

				<div class="input-field col s12 l6 m12 ">					
					<input name="rollno" autofocus placeholder="Roll Number" type="text" style="margin-top: 5px;" required>
					<label for="rollno">Roll Number ( 14THXXXXX )</label>
				</div>
				<div class="input-field col s12 l6 m12 ">					
					<input name="dob" placeholder="Date of Birth" pattern="\d{1,2}-\d{1,2}-\d{4}" type="text" style="margin-top: 5px;" required>
					<label for="dob">Date of Birth ( dd-mm-yyyy)</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4 m12 offset-l4">
					<button type="submit" id="submit" name="submit" class="waves-effect waves-light btn" style="font-size: 15px;" required >Submit</button>
				</div>
			</div>
			</form>
			<p class=" center sub-title main-title" >Contact us at:<br> <a href="mailto:yearbook2k17.kgp@gmail.com"> yearbook2k17.kgp@gmail.com<a><i class="material-icons">error_outline</i><span class="tooltip">If you are not graduating this year, but want to write about your friends who are graduating, send us the testimonials via mail at yearbook2k17.kgp@gmail.com</span></a></p>

	</div>

</div>
		<script src="./ind/TweenLite.min.js.download"></script>
		<script src="./ind/EasePack.min.js.download"></script>
		<script src="./ind/demo-1.js.download"></script>
	</body>
	</html>
