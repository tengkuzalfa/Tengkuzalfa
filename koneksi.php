<?php  

// isikan dengan nama database yang akan di hub.
$host = "localhost";
$user = "root";
$pass = "";
$name = "user";

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal !");
mysqli_select_db($koneksi, $name) or die ("TIdak ada Database yang dipiliih !");

?>