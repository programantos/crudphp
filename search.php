<?php 
//PANGGIL KONEKSI DATABASE
include_once('config.php');
$search=$_GET['search'];
$result=mysqli_query($mysqli, "SELECT * From users WHERE nama LIKE '%$search%' ORDER BY id DESC");
//echo "<pre>".print_r(mysqli_fetch_array($result))."<pre>";

 ?>
 <html>
<head>
	<title>belajar CRUD</title>
</head>
<body>
<a href="add.php">insert new</a>
	<form action="search.php" method="GET">
		<input type="text" name="search" placeholder="nama">
		<button type="submit" name="submit">search</button>
	</form>
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

		if (mysqli_num_rows($result)) {
		while($res=mysqli_fetch_array($result)) { 
		?> <!-- membuat tampilan id dari database, dengan peritah mysqli_fetch_array maka akamn mengubah data di database menjadi berbentuk array-->
			<tr>
				<td><?php echo $res['id']?></td>
				<td><?php echo $res['nama']?></td><!--ini akan menampilkan data di datanase-->
				<td><?php echo $res['umur']?></td>
				<td><?php echo $res['alamat']?></td>
				<td>
				<a href="edit.php?id=<?php echo $res['id']?>">edit</a>
				<a href="delet.php?id=<?php echo $res['id']?>">delete</a>


				</td>
			</tr>
		<?php } }else{ ?>
		<tr>
			<td colspan="5" align="center">DATA TIDAK ADA !</td>
		</tr>
		<?php } ?>


	</tbody>
	

</table>
</body>
</html>