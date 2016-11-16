<?php
include('config.php');

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $alamat = $_POST['alamat'];

// echo $id.'<br />'.$nama.'<br />'.$umur.'<br />'.$alamat;
  $query = mysqli_query($mysqli, "UPDATE users SET
    nama = '$nama',
    umur = '$umur',
    alamat = '$alamat'
    WHERE id = '$id'");
    header("location:index.php");
}

// redirect ke halaman inex.php


 ?>