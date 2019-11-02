<?php
    $hapus=$_POST['hapus'];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"coriza");
    $hasil=mysqli_query($conn,"select * from mahasiswa where NRP = '$hapus'");

    while($baris=mysqli_fetch_array($hasil)){
    echo "NRP : ", $baris[0], '<br>';
    echo "NAMA : ", $baris[1], '<br>';
    echo "ALAMAT :", $baris[2], '<br>';
    echo "ID_Jurusan : ", $baris[3], '<br>';
    $bantu = $baris[3];
    $hasil=mysqli_query($conn,"select * from jurusan where ID_Jur = '$bantu'");
    while($baris=mysqli_fetch_array($hasil)){
    echo "Jurusan : ", $baris[1], '<br><br>';
    }
  }

$hasil=mysqli_query($conn,"delete from mahasiswa where NRP = '$hapus'");
if ($conn->query("delete from mahasiswa where NRP = '$hapus'") === TRUE) {
$cek = 1;
}else {
$cek = 0;
}

if ($cek == 1) {
echo "Data berhasil dihapus";
echo "<br>";
}else {
  echo "Data Tidak ada!!";
}
?>
