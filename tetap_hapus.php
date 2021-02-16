<?php
include 'koneksi.php'; 
if (isset($_GET[setvalidlayanancodingMjIyM])){
	$qry=mysqli_query($konek,"delete from tbl_penduduk_tetap where kode='".$_GET["setvalidlayanancodingMjIyM"]."'");
	if ($qry){
		header('location: tetap_add.php');
	}
}
?>