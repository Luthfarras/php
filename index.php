<?php
include 'config.php';

$condition = "";
$get_data = read('user', $condition);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Latihan</title>
  </head>
  <body>
    <div class="container mt-5">
      <a href="create.php" type="button" class="btn btn-outline-primary mb-3">Tambah Data</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Role ID</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
          while ($data = mysqli_fetch_array($get_data)) {
           ?>
          <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['role_id'] ?></td>
            <td colspan="2">
              <a href="update.php?id=<?= $data['id']; ?>" class="btn btn-outline-warning">Edit</a>
              <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-outline-danger">Hapus</a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
