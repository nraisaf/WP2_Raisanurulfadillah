<!DOCTYPE html>
<html>
<head>
	<title>belajar membuat form komentar</title>
	<h1>Isi Data komentar</h1>
</head>
<body>
<FORM action="tampil_formulir.php" method="get">
Nama: <input type="text" name="nama"/><br><br>
Password: <input type="Password" name="Password"/><br><br>
Jenis Kelamin :
<input type="radio" name="Jenis_kelamin" value="Laki-laki"/> Laki-laki
<input type="radio" name="Jenis_kelamin" value="Perempuan"/> Perempuan
<br><br>
Hobi :
<input type="checkbox" name="hobi[]" value="Membaca buku"/> Membaca Buku
<input type="checkbox" name="hobi[]" value="Menulis"/> Menulis
<input type="checkbox" name="hobi[]" value="Memancing"/> Memancing
<br><br>
Asal Kota:
<select name="asal_kota" >
<option value="-Pilih Kota-">
<option value="Jakarta">Jakarta</option>
<option value="Bandung">Bandung</option>
<option value="Semarang">Semarang</option>
</select>
<br><br>
Komentar Anda:
<textarea name="Komentar" rows="5" cols="20">
Silahkan katakan isi hati anda
</textarea><br><br>
<input type="submit" value="Mulai proses!"> </FORM>

</body>
</html>