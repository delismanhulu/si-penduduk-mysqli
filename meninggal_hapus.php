<?php
include 'koneksi.php'; 
if (isset($_GET[setvalidlayanancodingMjIyM])){
	$qry=mysqli_query($konek,"delete from tbl_kematian where kode='".$_GET["setvalidlayanancodingMjIyM"]."'");
	if ($qry){
		header('location: meninggal_tampil.php');
	}
}
?>