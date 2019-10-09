<?php
$iniarray = array("lanirne" , "aduh" , "qifuat" , "toda" , "anevi" , "samid" , "kifuat");

sort($iniarray);

for($x = 0; $x < count($iniarray); $x++) {
    echo $iniarray[$x];
    echo "<br>";
}
?>
