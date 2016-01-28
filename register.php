<html>
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});
		});</script>

	</head>
	<body>
		<form method="post" action="registerconnect.php">
		<div class="container z-depth-2 " style="padding:15px" >
				<div  style="color:black;">

					<h4>REGISTER FOR YEARBOOK</h4>
				</div>
				<div class="row">
					<div class="input-field col s12 l6 m12">
						<i class="material-icons prefix">account_circle</i>
						<input name="rollno" type="text" required>
						<label for="rollno">Roll Number (Eg : 14THXXXXX )</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12">
						<i class="material-icons prefix">email</i>
						<input name="dob" type="text" required class="validate">
						<label for="dob">Date of Birth (dd/mm/yyyy)</label>
					</div>
				</div>
				<div>
					<button type="submit" name="submit"class="waves-effect waves-light btn" required style="background-color:red">SUBMIT</button>
				</div>
			</div>
		</form>

	</body>
	</html>