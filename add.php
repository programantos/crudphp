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
		<label for="email">email</label>
		<input type="email" name="email"><br>
		<label for="password">password</label>
		<input type="password" name="password"><br>


		<input type="submit" name="submit" value="simpan" >	
	</form>


</body>
</html>
<?php
//echo "<pre>".print_r($_POST,1)."</pre>";
//koneksi ke database
include_once('config.php');
include_once('helper.php');
//jika ada yang submit data, baru kita bisa proses
if(isset($_POST['submit'])){

	$nama=filterdata($_POST['nama']);
	$umur=filterdata($_POST['umur']);
	$alamat=filterdata($_POST['alamat']);
	$email=filterdata($_POST['email']);
	$password=filterdata(md5($_POST['password']) );
	// echo $password;
	// die();
	//melakukan validasi
	if(empty($nama) || empty($umur) || empty($alamat) || empty($email) || empty($password) ){
		//jika error data gak di isi
		echo "harus di isi semua inputan";
	}else{
		//kalau data di isi
		$sql="INSERT INTO users(nama, umur, alamat, email, password) VALUES ('$nama','$umur','$alamat', '$email', '$password')";
	$results = mysqli_query($mysqli, $sql);

	header("Location:index.php");

	}

	
} 



  ?>