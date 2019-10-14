<?php 
require 'koneksi.php';
session_start();
 ?>

<?php

 $id = $_GET['id'];

$query = mysqli_query($koneksi , "DELETE from user where id = '$id'");

if($query){
	header('location:index.php');
}