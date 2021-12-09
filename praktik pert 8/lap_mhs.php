<?php
// memanggil library FPDF
require('FPDF/fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');

// membuat halaman baru
$pdf->AddPage();

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(25,6,'J KEL',1,0);
$pdf->Cell(50,6,'ALAMAT',1,0);
$pdf->Cell(30,6,'TANGGAL LHR',1,1);
$pdf->SetFont('Arial','',10);

include 'koneksi.php'; // include database connection file
$mahasiswa = mysqli_query($con, "select * from mahasiswa"); // untuk menampilkan data mahasiswa
while ($row = mysqli_fetch_array($mahasiswa)){ 
 $pdf->Cell(20,6,$row['nim'],1,0); //untuk menampilkan nim mahasiswa dan memberikan space agar tidak terlalu rapat
 $pdf->Cell(50,6,$row['Nama'],1,0); //untuk menampilkan nama mahasiswa dan memberikan space agar tidak terlalu rapat
 $pdf->Cell(25,6,$row['jenis_kelamin'],1,0); //untuk menampilkan jkel mahasiswa dan memberikan space agar tidak terlalu rapat
 $pdf->Cell(50,6,$row['alamat'],1,0); //untuk menampilkan alamat mahasiswa dan memberikan space agar tidak terlalu rapat
 $pdf->Cell(30,6,$row['tgllhr'],1,1); //untuk menampilkan tabggal lahir mahasiswa dan memberikan space agar tidak terlalu rapat
}

$pdf->Output(); //untuk menampilkan outputnya
?>