
<?php

session_start();
include 'connection.php';
    if (isset($_SESSION['rollno'])) {
        
    }else{
    echo '<script>alert("You need to Log In");window.location.href="index.php";</script>';
    }

  $value1=$_SESSION['rollno'];
  $query1 = "select * from register where rollno = '$value1'"; 
  $result =  $connection->query($query1); 
  $line = mysqli_fetch_array($result);
  if (!$_FILES["fileToUpload"]["name"]) {
    $target_file=$line['pro_pic'];
  }else{
    if ($line['pro_pic']) {
    unlink($line['pro_pic']);
    }
$target_dir = "uploads/";
$name_hash=md5($_SESSION['rollno'])."_".basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $name_hash;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo '<script language="javascript">alert("File is an image - ' . $check["mime"] . ');</script>';
        $uploadOk = 1;
    } else {
        echo '<script language="javascript">alert("File is not an image ");</script>';
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo '<script language="javascript">alert("Sorry, your file is too large.");</script>';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<script language="javascript">alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");</script>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<script language="javascript">alert("Sorry, your file was not uploaded.");</script>';
	echo '<script type="text/javascript">  window.location.href = "register.php";</script>';
	die();
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo '<script language="javascript">alert("Your image was uploaded.");</script>';
    } else {
    echo '<script language="javascript">alert("Sorry, there was an error uploading your file.");</script>';

    }
}
}
	$value1=$_SESSION['rollno'];
	$motto=mysqli_real_escape_string($connection,$_POST['motto']);
	$query=$connection->query("UPDATE register
	SET view_self='$motto' , pro_pic='$target_file'	WHERE rollno='$value1'");
	echo '<script type="text/javascript">  window.location.href = "register.php";</script>';




?>