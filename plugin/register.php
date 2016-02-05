
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
	<form method="post" action="registerconnect.php">
	
		<div class="container2 z-depth-2">
		<div style="color:black;">
				<h4>FILL UP YOUR DETAILS</h4>
			</div>
			<div class="row">

				<div class="input-field col s12 l6 m12 ">
					<i class="material-icons prefix">account_circle</i>
					<input name="department" type="text" value="<?php echo $line['department']; ?> "required>
					<label for="department">Department</label>
				</div></div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">account_circle</i>
						<input name="YOG"pattern="[0-9]{4}"value="<?php echo $line['YOG']; ?>" type="text"required>
						<label for="YOG">Year of Graduation (Eg : 20XX)</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">home</i>
						<input name="HOR" type="text" value="<?php echo $line['HOR']; ?>"required>
						<label for="HOR">Hall of Residence</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">home</i>
						<input name="course" type="text" value="<?php echo $line['course']; ?>"required>
						<label for="course">Course (UG / PG /RS)</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">home</i>
						<input name="email" value="<?php echo $line['email']; ?>"type="email" >
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s12 l6 m12 ">
						<i class="material-icons prefix">home</i>
						<input name="phone"value="<?php echo $line['phone']; ?>" type="number" size="10" optional>
						<label for="phone">Phone no</label>
					</div>
				</div>
				<div>
				<button type="submit" id="submit"name="submit"class="waves-effect waves-light btn"required style="background-color:red">SUBMIT</button>
			</div>
			</div>
		</form>
		<?php include 'index.php';?>
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