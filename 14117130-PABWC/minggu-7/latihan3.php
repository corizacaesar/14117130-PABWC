<?php
function faktorial($angka){
  if ($angka > 1) {
    return $angka * faktorial($angka-1);
  }elseif ($angka == 1) {
    return $angka;
  }

}

echo "faktorial 5 = " ,faktorial(5), "<br>";
echo "faktorial 6 = " ,faktorial(6), "<br>";
?>
