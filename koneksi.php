<?php
error_reporting(0);
$server= 'localhost'; 
$user= 'root';
$password= ''; 
$database= 'penduduk';
$konek= mysqli_connect($server,$user,$password,$database);
if ($konek){
		echo "";
	}else
		{							
		echo "GAGAL KONEK KE DATABASE";
}
?>
