<?php
$umur = 29;
$menikah = false;
$jk = "P";
if ($umur >= 25 && $jk == "L" && $menikah == true) {
  echo "selamat datang pak!";
}elseif ($umur >= 25 && $jk == "P" && $menikah == true) {
  echo "selamat datang bu!";
}elseif ($umur >= 18 && $jk == "L" && $menikah == false) {
  echo "selamat datang anak laki laki!";
}elseif ($umur >= 18 && $jk == "P" && $menikah == false) {
  echo "selamat datang anak perempuan!";
}else {
  echo "website ini hanya untuk orang yang berumur 18+";
}
 ?>
