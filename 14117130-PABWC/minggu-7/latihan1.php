<?php
function increment(&$value1, &$value2){
  $temp=$value1;
  $value1=$value2;
  $value2=$temp;
}
$x = 1;
$y = 2;

echo "Awal = $x , $y<br>";
increment($x, $y);
echo "Hasil = $x , $y";

?>
