<html>
<body>

<?php
if ($_POST) {
Harga($_POST['nama'] , $_POST['warna']);
}else{
Harga($_POST['nama']);
}

function Harga($nama, $warna="red"){
  $panjang = strlen($nama);
  $harga = 0;
  if ($panjang > 20) {
    $harga = $panjang*700;
  }elseif ($panjang > 10) {
    $harga = $panjang*500;
  }elseif($panjang > 0) {
    $harga = $panjang*300;
  }
echo 'Harga = '," $harga ", '<br>Warna = <font color="'.$warna.'">' ,"$warna" , '</font><br>';
}
?>

</body>
</html>
