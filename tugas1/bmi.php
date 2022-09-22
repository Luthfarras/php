<?php
$tinggi = 156;
$berat = 76;
$bmi = $berat  / (($tinggi * $tinggi)/10000);
if ($bmi > 29.9) {
  echo "Obesitas";
}elseif ($bmi >= 23 && $bmi <= 29.9){
  echo "berat badan anda berlebih";
}elseif ($bmi >= 18.6 && $bmi <= 22.9){
  echo "berat badan normal";
}else {
  echo "berat badan anda kurang";
}
 ?>
