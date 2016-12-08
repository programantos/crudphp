<?php 
session_start();
//kalau ada session user kita logout
if (isset($_SESSION['user'])) {
	session_destroy();
	header("Location:login.php");
}

 ?>