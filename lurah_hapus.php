<?php
include 'koneksi.php'; 
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_lurah where kode='".$_GET["id"]."'");
	if ($qry){
		header('location: lurah_add.php');
	}
}
?>