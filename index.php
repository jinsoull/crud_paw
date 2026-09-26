<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Angkatan</th>
    <th>Aksi</th>
  </tr>
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['jurusan'] ?></td>
      <td><?= $row['angkatan'] ?></td>
      <td>
        <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
      </td>
    </tr>
  <?php } ?>
</table>
<a href="insert.php">Tambah Data</a>
