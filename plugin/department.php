<?php
	require 'connection.php';
	session_start();
	$value1=$_SESSION['rollno'];
	$query = "select * from register where rollno = '$value1'"; 
	$result = mysql_query($query); 
	$line = mysql_fetch_array($result, MYSQL_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<script type="text/javascript">
		 $('.button').mousedown(function (e) {
    var target = e.target;
    var rect = target.getBoundingClientRect();
    var ripple = target.querySelector('.ripple');
    $(ripple).remove();
    ripple = document.createElement('span');
    ripple.className = 'ripple';
    ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
    target.appendChild(ripple);
    var top = e.pageY - rect.top - ripple.offsetHeight / 2 -  document.body.scrollTop;
    var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
    ripple.style.top = top + 'px';
    ripple.style.left = left + 'px';
    return false;
});

	</script>
	<style>

.button {
  display: inline-block;
  margin: 0.3em;
  padding: 1.2em 5em;
  overflow: hidden;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  border-radius: 3px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  box-shadow: 0 2px 10px rgba(0,0,0,0.5);
  border: none; 
  font-size: 15px;
  text-align: center;
}

.button:hover {
  box-shadow: 1px 6px 15px rgba(0,0,0,0.5);
}

.green {
  background-color: #4CAF50;
  color: white;
}


.ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  border-radius: 100%;
  transform: scale(0.2);
  opacity:0;
  pointer-events: none;
  -webkit-animation: ripple .75s ease-out;
  -moz-animation: ripple .75s ease-out;
  animation: ripple .75s ease-out;
}

@-webkit-keyframes ripple {
  from {
    opacity:1;
  }
  to {
    transform: scale(2);
    opacity: 0;
  }
}

@-moz-keyframes ripple {
  from {
    opacity:1;
  }
  to {
    transform: scale(2);
    opacity: 0;
  }
}

@keyframes ripple {
  from {
    opacity:1;
  }
  to {
    transform: scale(2);
    opacity: 0;
  }
}



body
{
	background-image: url('bck.jpg');
	background-size: cover;
}
.toggle{
	display: none;
}
 @font-face {
     font-family:pacifico;
     src: url('Pacifico.ttf');
 }
 .btn
 {
 	text-transform: lowercase;
 	font-family: pacifico;
 }


</style>
</head>
<body>
	<div class="container">
		<table class="highlight">
	        <thead>
	          <tr>
	              <th data-field="rollno">Roll No.</th>
	              <th data-field="name">Name</th>
	              <th data-field="views">Views</th>
	          </tr>


	        </thead>

	        <tbody>
	          <?php
	          	$dept = $line['department'];
	          	$query_select = "select * from register where department = '$dept'";
	          	$query_select_run = mysql_query($query_select);
	          	while ($list = mysql_fetch_assoc($query_select_run)) {
	          		$list_students[] = $list;
	          	}
	          	echo '<form method="POST" action="department.php">';
	          	for($i=0;$i<count($list_students);$i++){
	          		echo '<tr><td>'.$list_students[$i]['rollno'].'</td><td>'.$list_students[$i]['name'].'</td><td>
	          			  
						    
						      <div class="row">
						        <div class="input-field col s12">
						          <input id="views" type="text" class="validate" name="views'.$i.'" required>
						          <label for="views" data-error="wrong" data-success="right">Write your views here</label>
						        </div>
						      </div>
						    
						  
	          		</td></tr>';
	          	}
	          	echo '<center><input type="submit" class="button green"></center> </form>';
		        //if(isset($_POST['views'.$i.'']) && !empty($_POST['views'.$i.''])){ 
		          	for($i=0;$i<count($list_students);$i++){
		          		//$query_save_views = "insert into views values ('', ".$line['rollno'].", ".$list_students[$i]['rollno'].", 'views".$i."')";	
		          		//$_POST['views'.$i.''] = 'default';
		          		
		          		$views = $_POST['views'.$i.''];
		          		$rollno = $line['rollno'];
		          		$deptmate = $list_students[$i]['rollno'];
		          		$query_save_views = "insert into views values ('', '$rollno','$deptmate', '$views')";	
		          		$query_save_views_run = mysql_query($query_save_views);

		          	}
		         //}  	
	          ?>
	        </tbody>
      	</table>
	</div>
</body>
</html>
