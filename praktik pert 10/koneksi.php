<?php //menggunakan bahasa pemrograman PHP
$host="localhost"; // untuk menyiapkan variabel 'host' untuk mendefinisikan nama server
$username="root"; // untuk menyiapkan variabel 'username' untuk mendefinisikan nama user database pada MySQL
$password=""; //untuk mendefinisikan password pada database jika menggunakan password 
$databasename="akademik"; //untuk mnyiapkan variabel 'database' untuk mendefinisikan nama database pada MySQL
$con=@mysqli_connect($host,$username,$password,$databasename);

//untuk mengecek koneksi pada databse apakah terdapat error atau tidak
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
?>