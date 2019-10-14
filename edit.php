<?php 
require 'koneksi.php';
session_start();
 ?>

<?php

$id = $_GET['id'];

if(isset($_POST['edit']) && $_POST['edit'] == "SIMPAN"){

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];

	$query = mysqli_query($koneksi , "UPDATE user set nama = '$nama' , alamat = '$alamat' , pekerjaan = '$pekerjaan' where id = '$id'");

	if ($query) {
		header('location:index.php');
	}
}

$query = mysqli_query($koneksi , "SELECT * FROM user where id = '$id'");
$data = mysqli_fetch_assoc($query);


 ?>

 <h2>EDIT DATA USER</h2>

<form action="" method="post" enctype="multipart/form-data">
	<table border="1" class="table">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<tr>
			<th><input type="text" name="nama" value="<?=$data['nama'];?>"></th>
			<th><input type="text" name="alamat" value="<?=$data['alamat'];?>"></th>
			<th><input type="text" name="pekerjaan" value="<?=$data['pekerjaan'];?>"></th>
		</tr>
	</table>

	<br>
	<input type="submit" name="edit" value="SIMPAN">
	<input type="button" name="cancel" onclick='top.location="index.php"' value="CANCEL">
</form>