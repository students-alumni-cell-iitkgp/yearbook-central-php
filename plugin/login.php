<html>
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<style>
@font-face {
     font-family:pristine;
     src: url('PRISTINA.TTF');
 }
 @font-face {
     font-family:pacifico;
     src: url('Pacifico.ttf');
 }
	body
	{
		background-image: url('khb.jpg');
		background-size: cover;

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
		font-family: 'pacifico';
		font-size: 20px;
	}
</style>
<body>
	<form method="post" action="loginconnect.php" >
	<!--<div class="row">
		<div class="heading card col s12 l6 m6 z-depth-3 offset-l3"><h>YEARBOOK PORTAL</h></div>
	</div>	-->
	<div class="container">
	<div class="row">
	<div class="col l2 s2 m2">	
	<img width="200px"src="Logo.png">
	</div>
	<div class="col l6 s6 m6 offset-l1">
<h4 class="center" style="font-family:pacifico;font-size:350%;color:#707070">Yearbook'16 Portal</h4>
			</div>
			</div>
			</div>
			<div class="row">
			<div class=" animated bounceIn container1 col s12 l6 m6 offset-l3">

			<div class="row" style="height:30px;">

				<div class="input-field col s12 l6 m12 ">
					
					<input name="rollno"autofocus placeholder="Roll Number" type="text" required>
					<label for="rollno">Roll Number ( 14THXXXXX )</label>
				</div>
	

				<div class="input-field col s12 l6 m12 ">
					
					<input name="dob"placeholder="Date of Birth" pattern="\d{1,2}/\d{1,2}/\d{4}" type="text" required>
					<label for="dob">Date of Birth ( dd/mm/yyyy)</label>
				</div>
			</div>
			<div class="row">
			<div class="col s12 l4 m12 offset-l5">
			<button type="submit" id="submit"name="submit" class="waves-effect waves-light btn"required >SUBMIT</button>
		</div></div>
		</div>
	</div>	
	
			</form>
			<div class="row">
				<div class="col l2 m6 s12 offset-l7 box">
				<p style="margin-left: 50px">Contact us at:<br> yearbook.iitkgp@gmail.com</p>

				</div>
			</div>
<script>
	 function myFunction(){
	 	$(".container1").addClass('zoomIn');

	 });
</script>
	</body>
	</html>
