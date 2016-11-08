<?php
//fungsinya mengoneksikan php dengan database
//
$databasehost='localhost';//kalau di alamat web maka menggunakan alamat web tujuan.
$databasename= 'crud';
$databaseUsername='root';
$databasepassword='mantos';
$mysqli = mysqli_connect($databasehost, $databaseUsername, $databasepassword, $databasename) or die ('not conected to sql');

//vachar = "sultan dika, del piero";
//char ="2222 6666 9999"
//mysqli  adalah yang suport sekarang;



 ?>