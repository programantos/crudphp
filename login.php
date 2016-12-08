<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<fieldset>
	<legend>login</legend>
	<form method="POST" action="login.php">
		<label for="email">email</label>
		<input type="email" name="email"><br>
		<label for="password">password</label>
		<input type="password" name="password"><br>
		<input type="submit" name="submit" value="simpan" >	
	</form>
	</fieldset>

</body>
</html>
<?php 
session_start();
include_once('config.php');
include_once('helper.php');
  //echo "<pre>".print_r($_POST)."</pre>";
if (isset($_POST['submit'])) {
	$email=filterdata($_POST['email']);
	$password=md5($_POST['password']);
	$submit=filterdata($_POST['submit']);
	
	//1.bikin koneksi
	//2.bikin form
	//3.bikin query intuk select data berdasarkan email
	//4.membandingkan data yang di input email dan password data user yang ada di table, jika sama dengan data yang ada di table user maka dia login dan redirect /pindah halaman ke index.php/ home han jika salah maka redirect ke halaman login dengan pesan error;
	$login=mysqli_query($mysqli, "SELECT * FROM users 
		WHERE email='$email' 
		AND password='$password'");
	$row=mysqli_num_rows($login);
	$data=mysqli_fetch_array($login);
	if($row>0){
		//kita login
		$_SESSION['user']=$data['email'];
		//redyrect ke index.php
		header("Location:index.php");
	}else{
		echo "gagal login";
	}



}
/*
perpustakaan
	-input buku
	-input customer
	-pencarian buku
	-hapus buku
	-update buku
	-pinjam buku
1.belajar databse
2.bootstrap
	 -grid
	 -button
	 -form8*/
?>

