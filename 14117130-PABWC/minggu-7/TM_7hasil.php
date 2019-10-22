<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>

    <?php
    echo "Hai! Data anda tersimpan sebagai berikut :<br><br>";
    echo "NAMA : ", $_POST['nama'], '<br>';
    echo "ALAMAT :", $_POST['alamat'], '<br>';
    echo "Jenis Kelamin : ", $_POST['jenis_kelamin'], '<br>';
    echo "Golongan Darah : ", $_POST['golongan_darah'], '<br>';
    echo "Hobby : ";

    if(!empty($_POST['hobby'])){
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['hobby'] as $selected){
    echo $selected.", ";
  }echo "sudah deh.";
  }

    echo "<br>Keterangan : ", $_POST['keterangan'], '<br>';

    ?>
  </body>
</html>
