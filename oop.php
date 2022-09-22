<?php
class manusia{
  function __construct(){
    echo "biodata <br>";
  }
  function nama($nama){
    return "nama saya $nama <br>";
  }
  function __destruct(){
    echo "terimakasih <br>";
  }
}
$man = new manusia();
echo $man-> nama('aes');

class teman extends manusia{
  function nama_teman($nt){
    return "nama teman saya $nt";
  }
}
$tmn = new teman();
echo $tmn-> nama('eff');

?>

