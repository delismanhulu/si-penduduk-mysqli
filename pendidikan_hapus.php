<?php
include 'koneksi.php'; 
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_pendidikan where kode='".$_GET["id"]."'");
	if ($qry){
		header('location: pendidikan_add.php');
	}
}
?>