<?php
include_once('config.php'); //include_once dan include required;
// echo $_GET['nama'];
// echo $_GET['id'];
$id = $_GET['id'];
	//delet data berdasarkan id
	mysqli_query($mysqli,"DELETE FROM users WHERE id=$id");
	//kalo udah delete balik ke index.php 
	header("location:index.php");
  ?>
