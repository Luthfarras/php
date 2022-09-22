<?php
$nilai = 90;
if ($nilai >= 0 && $nilai <= 59) {
  echo "grade E";
}elseif ($nilai >= 60 && $nilai <= 69) {
  echo "grade D";
}elseif ($nilai >= 70 && $nilai <= 79) {
  echo "grade C";
}elseif ($nilai >= 80 && $nilai <= 89) {
  echo "grade B";
}else {
  echo "grade A";
}
 ?>
