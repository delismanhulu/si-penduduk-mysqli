<?php
include 'koneksi.php'; 
if (isset($_GET[setvalidlayanancodingMjIyM])){
	$qry=mysqli_query($konek,"delete from tbl_pendatang where kode='".$_GET["setvalidlayanancodingMjIyM"]."'");
	if ($qry){
		header('location: datang_tampil.php');
	}
}
?>