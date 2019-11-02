<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>

    <?php
    $NRP = $_POST["NRP"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $ID_Jur = $_POST["ID_Jur"];
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
    mysqli_select_db($conn,"coriza");
    $sqlstr="insert into mahasiswa (NRP,Nama,Alamat,ID_Jur) values ('$NRP','$nama','$alamat','$ID_Jur')";
    $hasil = mysqli_query($conn,$sqlstr);

    echo "Hai! Data anda tersimpan sebagai berikut :<br><br>";
    echo "NRP : ", $_POST['NRP'], '<br>';
    echo "NAMA : ", $_POST['nama'], '<br>';
    echo "ALAMAT :", $_POST['alamat'], '<br>';
    echo "ID_Jurusan : ", $_POST['ID_Jur'], '<br>';

    $hasil=mysqli_query($conn,"select * from jurusan where ID_Jur = '$ID_Jur'");
    while($baris=mysqli_fetch_array($hasil)){
    echo "Jurusan : ", $baris[1], '<br>';
    }
    ?>
  </body>
</html>
