<?php
include 'config.php';
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $angkatan = $_POST['angkatan'];

  mysqli_query($conn, "INSERT INTO mahasiswa (nama, jurusan, angkatan) VALUES ('$nama','$jurusan','$angkatan')");
  header("Location: index.php");
}
?>
<form method="POST">
  Nama: <input type="text" name="nama"><br>
  Jurusan: <input type="text" name="jurusan"><br>
  Angkatan: <input type="text" name="angkatan"><br>
  <button type="submit" name="submit">Simpan</button>
</form>
