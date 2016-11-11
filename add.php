<!DOCTYPE html>
<html>
<head>
	<title>new insert</title>
</head>
<body>
	<form action="add.php" method="POST">
		<label for="nama">nama</label>
		<input type="text" name="nama"><br>
			<label for="umur">umur</label>
			<input type="text" name="umur"><br>
		<label for="alamat">alamat</label>
		<textarea name="alamat"></textarea><br>

		<input type="submit" name="submit" value="simpan" >	
	</form>


</body>
</html>
<?php
//echo "<pre>".print_r($_POST,1)."</pre>";
//koneksi ke database
include_once('config.php');
//jika ada yang submit data, baru kita bisa proses
if(isset($_POST['submit'])){

	$nama=$_POST['nama'];
	$umur=$_POST['umur'];
	$alamat=$_POST['alamat'];
	//melakukan validasi
	if(empty($nama) || empty($umur) || empty($alamat)){
		//jika error data gak di isi
		echo "harus di isi semua inputan";
	}else{
		//kalau data di isi
		$sql="INSERT INTO users(nama, umur, alamat) VALUES ('$nama','$umur','$alamat')";
	$results = mysqli_query($mysqli, $sql);

	header("Location:index.php");

	}

	
} 


  ?>