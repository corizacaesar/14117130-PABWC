<html>
<body>

<form action="TM_7hasil.php" method="POST">
  <section>
Nama: <input type="text" name="nama"><br>
  </section>

  <section>
Alamat: <input type="text" name="alamat"><br>
  </section>

  <section>Jenis Kelamin:
    <input type="radio" name="jenis_kelamin" if (isset($gender) && $gender=="female") echo "checked" value="Perempuan">Perempuan
    <input type="radio" name="jenis_kelamin" if (isset($gender) && $gender=="male") echo "checked" value="Laki-laki">Laki-laki
    <br>
  </section>

<section>
Golongan Darah :  <select name="golongan_darah">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select> <br>
</section>

Hobby :
<section>
    <input type="checkbox" name="hobby[]" value="berenang">Berenang<br>
    <input type="checkbox" name="hobby[]" value="menyelam">Menyelam<br>
    <input type="checkbox" name="hobby[]" value="tenggelam">Tenggelam<br><br>
</section>

Keterangan: <textarea name="keterangan" rows="5" cols="40"></textarea><br>
<input type="submit">
</form>

</body>
</html>
