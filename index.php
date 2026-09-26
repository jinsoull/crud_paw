<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_assoc($result)) {
  echo $row['id']." - ".$row['nama']." - ".$row['jurusan']." - ".$row['angkatan'];
  echo " <a href='update.php?id=".$row['id']."'>Edit</a>";
  echo " <a href='delete.php?id=".$row['id']."'>Delete</a><br>";
}
?>
<a href="insert.php">Tambah Data</a>
