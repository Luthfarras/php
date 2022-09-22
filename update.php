<?php
include 'config.php';

$id = $_GET['id'];
$ambil = mysqli_query($db, "SELECT * FROM user WHERE id='$id'");
while($data = mysqli_fetch_array($ambil)){
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tambah</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="card bg-secondary bg-opacity-10 border border-secondary" style="width:30rem;">
        <div class="card-body">
          <form class="" action="" method="post">
            <div class="mb-3">
              <label>Username</label>
              <input class="form-control" type="text" name="username" value="<?= $data['username']?>">
            </div>
            <div class="mb-3">
              <label>Password</label>
              <input class="form-control" type="text" name="password" value="<?= $data['password']?>">
            </div>
            <button class="btn btn-outline-danger" type="submit" name="submit">Edit</button>
          </form>
        </div>
      </div>
    </div>
  <?php } ?>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $update_data = update('user', $_POST);
}
 ?>
