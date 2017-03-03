<?php
	if (isset($_SESSION['rollno'])) {
		
	}else{
  		echo '<script>alert("You need to Log In");window.location.href="index.php";</script>';
	}

?>

			<p class="box2">Write about your friends!</p> 
				<form action="viewsfriend.php" onSubmit="alert('Your views will be added in his yearbook after his registration and approval');" method="POST" style="padding-top: 0;">
				<div class="box4">
					<div class="row">
						<div class="col l6 m6 s12">
							<label for="froll">Roll Number</label>
							<input name="froll" autofocus placeholder="Your friend's Roll Number" type="text" required value="<?php  echo @$line['rollno']; ?>">

						</div>
						<div class="col l6 m6 s12">
							<label for="fname">Name</label>
							<input name="fname" id="fname" autofocus placeholder="Your friend's name" type="text" required value="<?php  echo @$line['name']; ?>">

						</div>
					</div>
					<div class="row">
						<div class="col l12 m12 s12">
							<label for="textarea2">Write Here!</label>

							<textarea id="textarea2" name="viewf" placeholder="Write Here!" class="materialize-textarea" style="padding-bottom: 0;"></textarea>
						</div>
					</div>
					<center>
					<button class="btn waves-effect waves-light" type="submit">submit</button></center>
				</div>
			</form>
			<br>
