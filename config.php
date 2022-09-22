<?php
$db = mysqli_connect("localhost", "root", "", "db_sekolah");

function read($table){
  global $db;
  $query = "select * from " . $table;
  $cek = mysqli_query($db, $query);
  return $cek;
}

function create($table, $data){
  global $db;
  $username = $data['username'];
  $password = $data['password'];
  $query = "INSERT into " . $table . "(username, password, role_id) VALUES ('$username', '$password', 2)";
  $cek = mysqli_query($db, $query);
  if ($cek) {
    header("location:index.php");
  }else {
    echo "<script>alert('Gagal menambah data.')</script>";
  }
}

function update($table, $data){
  global $db;
  $id = $_GET['id'];
  $username = $data['username'];
  $password = $data['password'];
  $query = "UPDATE " . $table . " SET username='$username', password='$password' WHERE id = '$id'";
  $cek = mysqli_query($db, $query);
  if ($cek) {
    header("location:index.php");
  }else {
    echo "<script>alert('Gagal update data.')</script>";
  }
}

function delete($table){
  global $db;
  $id = $_GET['id'];
  $query = "DELETE FROM " . $table . " WHERE id='$id'";
  $cek = mysqli_query($db, $query);
  if ($cek) {
    header("location:index.php");
  }else {
    echo "<script>alert('Gagal hapus data.')</script>";
  }
}
 ?>
