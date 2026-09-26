<?php
include 'config.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $angkatan = $_POST['angkatan'];

  $sql = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', angkatan='$angkatan' WHERE id=$id";
  mysqli_query($conn, $sql);
  header("Location: index.php");
}
?>
<form method="POST">
  Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>"><br>
  Jurusan: <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>"><br>
  Angkatan: <input type="text" name="angkatan" value="<?= $row['angkatan'] ?>"><br>
  <button type="submit" name="submit">Update</button>
</form>
