<?php
include'koneksi.php';
session_start(array());
	if (empty($_SESSION['user_name'])){
	echo "<h1>Harap Login</H1>";	die("Belum Login <a href=\"javascript:history.back()\">Back</a>");
	}else{	
?>
<?php } ?>
