<?php
include 'koneksi.php'; 
if (isset($_GET[setvalidlayanancodingMjIyM])){
	$qry=mysqli_query($konek,"delete from tbl_warga where kode='".$_GET["setvalidlayanancodingMjIyM"]."'");
	if ($qry){
		header('location: penduduk_tampil.php');
	}
}
?>