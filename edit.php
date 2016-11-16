<?php
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");
$result = mysqli_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>
    <form action="prosses-update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $result['id'] ?>">

      <label for="nama" >Nama</label>
      <input type="text" name="nama" value="<?php echo $result['nama'] ?>"><br>

      <label for="umur">Umur</label>
      <input type="text" name="umur" value="<?php echo $result['umur'] ?>"><br>

      <label for="alamat">Alamat</label>
      <textarea name="alamat" ><?php echo $result['alamat']; ?></textarea><br>

      <input type="submit" name="submit"value="Simpan">
    </form>
  </body>
</html>