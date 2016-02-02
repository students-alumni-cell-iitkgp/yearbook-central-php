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
	<form method="post" action="profileconnect.php">
		<div class="container1 z-depth-2">
			<div style="color:black;">
				<h4>REGISTER/SIGNIN</h4>
			</div>
			<div class="row">

				<div class="input-field col s12 l6 m12 ">
					<i class="material-icons prefix">account_circle</i>
					<input name="rollno" type="text" required>
					<label for="rollno">rollno</label>
				</div>
			</div>
			<div class="row">

				<div class="input-field col s12 l6 m12 ">
					<i class="material-icons prefix">account_circle</i>
					<input name="dob" type="text" required>
					<label for="dob">Date of Birth ( dd/mm/yyyy)</label>
				</div>
			</div>
			
		</div>
		<div class="container2 z-depth-2">
		<div style="color:black;">
				<h4>FILL UP YOUR DETAILS</h4>
			</div>
			<div class="row">

				<div class="input-field col s12 l6 m12 ">
					<i class="material-icons prefix">account_circle</i>
					<input name="department" type="text" required>
					<label for="department">Department</label>
				</div></div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">account_circle</i>
						<input name="YOG" type="text"required>
						<label for="YOG">Year of Graduation (Eg : 20XX)</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">home</i>
						<input name="HOR" type="text" required>
						<label for="HOR">Hall of Residence</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">home</i>
						<input name="course" type="text" required>
						<label for="course">Course (UG / PG /RS)</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">home</i>
						<input name="email" type="email" >
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">home</i>
						<input name="phone" type="text" optional>
						<label for="phone">Phone no</label>
					</div>
				</div>
				<div>
				<button type="submit" id="submit"name="submit"class="waves-effect waves-light btn"required style="background-color:red">SUBMIT</button>
			</div>
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