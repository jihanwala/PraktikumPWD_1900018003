<?php //menggunakan bahasa pemrograman PHP
$host="localhost"; // Digunakan untuk mengisi nama host SQL
$username="root";  //Variable untuk menampung username pada SQL
$password="";  // Variable untuk menampung password SQL
$databasename="akademik"; // Variable untuk mengisi database yang akan dipakai
$con=@mysqli_connect($host,$username,$password,$databasename); // Kode dibawah digunakan untuk menguhubungkan ke SQL
if (!$con) { 
    echo "Error: " . mysqli_connect_error();    // Kondisi jika parameter di atas tidak terpenuhi
    exit();
}
?>