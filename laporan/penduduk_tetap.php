<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
$pdf->Image('../gambar/logo.png',11,5,-1400);
// mencetak string 
$pdf->Cell(250,7,'KECAMATAN MEDAN DELI',0,1,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(250,7,'LAPORAN PENDUDUK TETAP',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'NIK',1,0);
$pdf->Cell(60,6,'NAMA',1,0);
$pdf->Cell(20,6,'TGL LAHIR',1,0);
$pdf->Cell(40,6,'JENSI KELAMIN',1,0);
$pdf->Cell(50,6,'STATUS',1,0);
$pdf->Cell(70,6,'ALAMAT',1,1);



$pdf->SetFont('Arial','',10);
include '../koneksi.php';
$mahasiswa = mysqli_query($konek, "select * from v_tetap");
while ($row = mysqli_fetch_array($mahasiswa)){
	
	$pdf->Cell(40,6,$row['nik'],1,0);  
    $pdf->Cell(60,6,$row['nama'],1,0);
    $pdf->Cell(20,6,$row['tgl_lahir'],1,0);
    $pdf->Cell(40,6,$row['jenis_kelamin'],1,0);
     $pdf->Cell(50,6,$row['status_kawin'],1,0);
    $pdf->Cell(70,6,$row['alamat'],1,1); 

}

$pdf->Output();
?>
