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
	<style>
		body
		{
			background-image: url('bb.jpg');
			background-repeat:no-repeat;
			background-attachment:fixed;
		}
		h3
		{
			text-align: center;

		}
	</style>

</head>
<body>
	<form method="post" action="profileconnect.php">
	<div class="container">
				<div style="color:black;">
					<h4>Fill up your details</h4>
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
					<button type="submit" name="submit"class="waves-effect waves-light btn"required style="background-color:red">SUBMIT</button>
				</div>

			</div>
		</div>
	</form>
	<div>
	<?php include'jQuery-File-Upload-9.11.2/index.html';?>
	</div>
</body>
</html>