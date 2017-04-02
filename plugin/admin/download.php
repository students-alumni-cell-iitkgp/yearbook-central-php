<?php 
session_start();
    if (sha1($_SESSION['rollno'])!="d033e22ae348aeb5660fc2140aec35850c4da997") {
      echo '<script>alert("Authorised Users only");window.location.href="../index.php";</script>';
    }
$file_name = $_GET['id'];

if(is_file($file_name)) {
	if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off');	}
	switch(strtolower(substr(strrchr($file_name, '.'), 1))) {
		case 'pdf': $mime = 'application/pdf'; break;
		case 'zip': $mime = 'application/zip'; break;
		case 'jpeg':
		case 'jpg': $mime = 'image/jpg'; break;
		default: $mime = 'application/force-download';
	}
	header('Pragma: public');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($file_name)).' GMT');
	header('Cache-Control: private',false);
	header('Content-Type: '.$mime);
	header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.filesize($file_name));
	header('Connection: close');
	readfile($file_name);
	exit();

}
 ?>