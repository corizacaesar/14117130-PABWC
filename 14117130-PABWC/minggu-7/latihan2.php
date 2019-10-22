<?php
function Harga($panjang, $warna="merah"){
  $harga = 0;
  if ($panjang > 20) {
    $harga = $panjang*700;
  }elseif ($panjang > 10) {
    $harga = $panjang*500;
  }elseif($panjang > 0) {
    $harga = $panjang*300;
  }
echo "Harga = $harga , Warna = $warna <br>";
}

$panjang = 10;
Harga(30);
Harga($panjang , "putih");

?>
