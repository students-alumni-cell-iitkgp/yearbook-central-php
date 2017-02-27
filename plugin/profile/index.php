<?php   
include '../connection.php';

  session_start();
  if ((isset($_SESSION['rollno']))) {
    
  }else{
  echo '<script>alert("You need to Log In");window.location.href="../index.php";</script>';
  }
  $value1=$_GET['roll'];
  $query = "select * from register where rollno = '$value1'"; 
  $result =  $connection->query($query); 
  if ($result) {
  $line = mysqli_fetch_array($result);
}
 ?>

<!doctype html>
<html>
  <head>
    <title>YB|Profile</title>
    <link rel="icon" href="../ind/fav.png" type="image/png" >
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="myself2.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <meta name=viewport content='width=700'>
    <style type="text/css">
      .btn{
        width: 180px;
      }
      body{
        
      font-family: Century gothic;
      }
.caption{
  margin-top: -40px;
  background-color: #005580;
}

.caption h2{
  text-align: left;
  font-size: 20px;
  color: #fff;
  padding-top:20px;
}

    </style>
  </head>
  
  <body>

    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col l6 m6 s6" style="padding: 20px;"><img src="<?php if ($line['pro_pic']) { echo '../'.$line['pro_pic']; } else { echo 'your-shot.jpg'; } ?>"></div>
          <div class="col l6 m6 s6" ><h1 style="font-size: 30px;"><?php echo $line['name']; ?></h1></div>
        </div> 
      </div>
    </div>

    <div class="caption">
      <div class="container">
      <div class="row">
        <div class="l8 m6 s6 l6">
          <h2>
          "<?php 
          if ($line['view_self']) {
          echo $line['view_self'];
           }else{
            echo "No Caption Uploaded";
           }
          ?>"
          </h2>
        </div>
      </div>
      </div>
    </div>            
      <div class="container">
        <div class="row">
        <div class="col l3 m3 s3">
          <h6 style="font-weight:bolder">Roll No.</h6>
          <h6><?php echo $line['rollno']; ?></h6>
        </div>
        <div class="col l3 m3 s3">
          <h6 style="font-weight:bolder">Hall</h6>
          <h6><?php echo $line['HOR']; ?></h6>
        </div>
        <div class="col l3 m3 s3">
          <h6 style="font-weight:bolder">Department</h6>
          <h6><?php echo $line['department']; ?></h6>
        </div>
        <div class="col l3 m3 s3">
          <h6 style="font-weight:bolder">Date of Birth</h6>
          <h6><?php echo $line['dob']; ?></h6>
        </div>
      </div>
      </div>
      <div class="container center">
      <?php if ($value1==$_SESSION['rollno']) {
        echo "Here’s what your friends written about you! Your testimonials are displayed below. You can approve or disapprove them by selecting the option shown beside each testimonial. The approved ones shall be a part of your yearbook.";
       include 'approval.php';
      } else {
       include '../department1.php';

      }
       ?>
    </div>    
  </body>
</html>