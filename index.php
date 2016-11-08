<?php 
// memanggil database //
include_once('config.php'); //include_once dan include required;
//include_once('namafile');
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
//$result=tempat menampung data database kita, mysqli_query untuk memanggil data dari datbase kita, ada 2 paramater mysqli_query(parameter 1,parameter 2), biasakan pakai huruf kapital saat membuat query, jika tidak mau semua di tampilkan gunakan SELECT nama, umur, alamat aja ,,, ORDER BY =diurutkan berdasarkan/ mengurutkan berdasarkan 'id'/'alamat'/dll,,, DESC =berdasarkan data terbaru yang di input, ASC =berdasarkan urutan terkecil atau dari atas ,,
// $apa=mysqli_fetch_array($result);
// print_r('<pre>');
// print_r($apa);
// print_r('</pre>');
?> 

<!DOCTYPE html>
<html>
<head>
	<title>belajar CRUD</title>
</head>
<body>
<table width="80%" border="1">
	<thead>
		<tr><!--ini akan menjadi judul tabel-->
			<td>id</td>
			<td>nama</td>
			<td>umur</td>
			<td>alamat</td>
			<td>action</td>
		</tr>
	</thead>
	<tbody>
		<?php // selama data masih ada di data
		while($res=mysqli_fetch_array($result)) { 
		?> <!-- membuat tampilan id dari database, dengan peritah mysqli_fetch_array maka akamn mengubah data di database menjadi berbentuk array-->
			<tr>
				<td><?php echo $res['id']?></td>
				<td><?php echo $res['nama']?></td><!--ini akan menampilkan data di datanase-->
				<td><?php echo $res['umur']?></td>
				<td><?php echo $res['alamat']?></td>
				<td><a href="edit.php?id=<?php echo $res[id]?>">edit</a>

				</td>
			</tr>
		<?php } ?>

	</tbody>
	

</table>
</body>
</html>