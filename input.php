<?php 
require 'koneksi.php';
session_start();
 ?>

<?php
 if (isset($_POST['tambah']) && $_POST['tambah'] == "TAMBAH") {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$query = mysqli_query($koneksi , "INSERT INTO user (nama,alamat,pekerjaan) VALUE ('$nama','$alamat','$pekerjaan')");

	if($query){
		header('location:index.php');
	}
}

?>

<h2>TAMBAH DATA USER</h2>

<form action="" method="post" enctype="multipart/form-data">
	<table border="1" class="table">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<tr>
			<td><input type="text" name="nama"></td>
			<td><input type="text" name="alamat"></td>
			<td><input type="text" name="pekerjaan"></td>
		</tr>
	</table>
	<br>
	<input type="submit" name="tambah" value="TAMBAH">
	<input type="button" name="cancel" onclick='top.location="index.php"' value="CANCEL">
</form>