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
$pdf->Cell(250,7,'LAPORAN PENDUDUK PINDAH',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'NIK',1,0);
$pdf->Cell(60,6,'Nama',1,0);
$pdf->Cell(20,6,'L/Desa',1,0);
$pdf->Cell(40,6,'Alasan Pindah',1,0);
$pdf->Cell(50,6,'Kecamatan',1,0);
$pdf->Cell(70,6,'Alamat',1,1);



$pdf->SetFont('Arial','',10);
include '../koneksi.php';
$mahasiswa = mysqli_query($konek, "select * from v_pindah");
while ($row = mysqli_fetch_array($mahasiswa)){
	
	$pdf->Cell(40,6,$row['nik'],1,0);  
    $pdf->Cell(60,6,$row['nama'],1,0);
    $pdf->Cell(20,6,$row['lurah'],1,0);
    $pdf->Cell(40,6,$row['alasan_pindah'],1,0);
     $pdf->Cell(50,6,$row['kecamatan'],1,0);
    $pdf->Cell(70,6,$row['alamat'],1,1); 

}

$pdf->Output();
?>
