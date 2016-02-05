<html>
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
	body
	{
		background-color: #ccc;

	}
	.container1,.container2
	{
		background-color: white;
		padding:20px;
		margin:50px;
	}
</style>
<body>
	<form method="post" action="loginconnect.php">
		<div class="container1 z-depth-2">
			<div style="color:black;">
				<h4>REGISTER/SIGNIN</h4>
			</div>
			<div class="row">

				<div class="input-field col s12 l6 m12 ">
					<i class="material-icons prefix">account_circle</i>
					<input name="rollno"pattern="[0-9]{2}[A-Za-z]{2}[0-9]{5}" type="text" required>
					<label for="rollno">Roll Number ( 14THXXXXX )</label>
				</div>
			</div>
			<div class="row">

				<div class="input-field col s12 l6 m12 ">
					<i class="material-icons prefix">account_circle</i>
					<input name="dob" pattern="\d{1,2}/\d{1,2}/\d{4}" type="text" required>
					<label for="dob">Date of Birth ( dd/mm/yyyy)</label>
				</div>
			</div>
			<button type="submit" id="submit"name="submit" class="waves-effect waves-light btn"required style="background-color:red">SUBMIT</button>
		
		</div>
	
			</form>
<!--<script>
	 $(document).ready(function(){
	 	$(".container2").hide();

	 	$("#submit2").click(function(){
$(".container2").show();
		 });
	 });
</script>-->
	</body>
	</html>