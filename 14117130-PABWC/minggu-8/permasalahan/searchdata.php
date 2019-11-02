<?php
    $cari=$_POST['cari'];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"coriza");
    $hasil=mysqli_query($conn,"select * from mahasiswa where Nama like '%$cari%'");
    $jumlah=mysqli_num_rows($hasil);
    echo "Ditemukan: $jumlah";
    echo "<br><br>";
    while($baris=mysqli_fetch_array($hasil)){
    echo "NRP : ", $baris[0], '<br>';
    echo "NAMA : ", $baris[1], '<br>';
    echo "ALAMAT :", $baris[2], '<br>';
    echo "ID_Jurusan : ", $baris[3], '<br>';
    $bantu = $baris[3];
    $hasil=mysqli_query($conn,"select * from jurusan where ID_Jur = '$bantu'");
    while($baris=mysqli_fetch_array($hasil)){
    echo "Jurusan : ", $baris[1], '<br>';
  }
}
?>
