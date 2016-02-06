
<html>
<?php 	
include 'connection.php';

	session_start();
	$value1=$_SESSION['rollno'];
	$query = "select * from register where rollno = '$value1'"; 
	$result = mysql_query($query); 
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
 ?>
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
</style>
<body>
<div class="row">
<div class="col l5 s11 m6 z-depth-2" style="margin:30px">
	<form method="post" action="registerconnect.php">
		
		<div style="color:white;background-color:#1a237e"><h4 style="text-align:center ">FILL UP YOUR DETAILS</h4></div>
			<div class="row">

				<div class="input-field col s11 l12 m12 ">
					<i class="material-icons prefix">account_circle</i>
					<input name="department" type="text" value="<?php echo $line['department']; ?>" required />
					<label for="department">Department</label>
				</div></div>
				<!--<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">account_circle</i>
						<input name="YOG"pattern="[0-9]{4}"value="<?php echo $line['YOG']; ?>" type="text"required>
						<label for="YOG">Year of Graduation (Eg : 20XX)</label>
					</div>
				</div>-->
				<div class="row">

					<div class="input-field col s6 l6 m6 ">
						<select name="HOR">
      <option selected disabled value="<?php echo $line['course'];?>"><?php if( $line['HOR']) echo $line['HOR'] ;else echo 'Choose your HALL';?></option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      </select>
					</div>
				

					<div class="input-field col s6 l6 m6 ">
						<select name="course" >
      <option selected value="<?php echo $line['course'];?>"><?php if( $line['course']) echo $line['course'] ;else echo 'Choose your COURSE';?></option>
      <option value="UG">UG</option>
      <option value="PG">PG</option>
      <option value="RS">RS</option>
    </select>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s11 l12 m12 ">
						<i class="material-icons prefix">email</i>
						<input name="email" value="<?php echo $line['email']; ?>"type="email" >
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s11 l12 m12 ">
						<i class="material-icons prefix">phone</i>
						<input name="phone"value="<?php echo $line['phone']; ?>" type="number" size="10" optional>
						<label for="phone">Phone no</label>
					</div>
				</div>
				<div>
				<button type="submit" id="submit"name="submit"class="waves-effect waves-light btn"required style="background-color:red" onclick="alert('submitted');">UPDATE</button>
			</div>
			
			
			
		</form></div>
		<div class="col s12 l7 m6">
		
			</div></div>
		<div class="row">
		<div class="col s12 m6 l6">
		<form action="upload.php">
		<button type="submit"class="waves-effect waves-light btn" >UPLOAD PHOTOS</button>
</form>
		</div>
		
				<form action="writeup.php">

		<div class="col s12 m6 l6">
		<button type="button"class="waves-effect waves-light btn">UPLOAD WRITEUPS</button>

		</div></form>
		</div>
		</div>
<script>
 $(document).ready(function() {
    $('select').material_select();
  });
</script>
	</body>
	</html>