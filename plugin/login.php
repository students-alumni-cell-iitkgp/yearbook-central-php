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
</style>
<body>
	<form method="post" action="loginconnect.php" >
	<!--<div class="row">
		<div class="heading card col s12 l6 m6 z-depth-3 offset-l3"><h>YEARBOOK PORTAL</h></div>
	</div>	-->
	<div class="row">
		<div class=" animated zoomIn container1 col s12 l6 m6 offset-l3">
		
				<h4 class="center" style="font-family:pacifico;font-size:350%;color:#707070">Yearbook'16 Portal</h4>
	
			<div class="row" style="height:30px;">

				<div class="input-field col s12 l6 m12 ">
					<i class="material-icons prefix" >account_circle</i>
					<input name="rollno"pattern="[0-9]{2}[A-Za-z]{2}[0-9]{5}" type="text" required>
					<label for="rollno">Roll Number ( 14THXXXXX )</label>
				</div>
	

				<div class="input-field col s12 l6 m12 ">
					<i class="material-icons prefix">account_circle</i>
					<input name="dob" pattern="\d{1,2}/\d{1,2}/\d{4}" type="text" required>
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
<script>
	 function myFunction(){
	 	$(".container1").addClass('zoomIn');

	 });
</script>
	</body>
	</html>