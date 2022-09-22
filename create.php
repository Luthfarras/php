<?php
include 'config.php';

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
      <div class="row">
        <div class="col-sm-6">
          <div class="card bg-primary bg-opacity-10 border border-secondary" style="width:30rem;">
            <div class="card-body">
              <form class="" action="" method="post">
                <div class="mb-3">
                  <label>Username</label>
                  <input class="form-control" type="text" name="username" value="" id="usn1">
                </div>
                <div class="mb-3">
                  <label>Password</label>
                  <input class="form-control" type="password" name="password" value="" id="pw1">
                </div>
                <button class="btn btn-outline-success" type="submit" name="submit">Add</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card bg-danger bg-opacity-10 border border-secondary" style="width:30rem;">
            <div class="card-body">
              <form class="" action="" method="post">
                <div class="mb-3">
                  <label>Username</label>
                  <input class="form-control" type="text" name="username" value="" disabled id="usn2">
                </div>
                <div class="mb-3">
                  <label>Password</label>
                  <input class="form-control" type="text" name="password" value="" disabled id="pw2">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
  document.getElementById("usn1").addEventListener("input", function(){
    document.getElementById("usn2").value = this.value;
  });
  document.getElementById("pw1").addEventListener("input", function(){
    document.getElementById("pw2").value = this.value;
  });
  </script>
</html>

<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $add_data = create('user', $_POST);
}
 ?>
