<!DOCTYPE html>
<html>
<head>
	<title>DATA KOMENTAR</title>
</head>
	<h2>Komentar</h2>
<body>
<form action="Tampilankomentar.php" method="post">
		 	 	 	<input type="text" name="nama" size ="30"><br><br>
    Jenis Kelamin :	<input type="radio" value="Laki-laki" name="jenis_kelamin">Laki-laki
    				<input type="radio" value="Perempuan" name="jenis_kelamin">Perempuan<br><br>
					<input type="text" name="email"><br><br>
					<input type="text" name="subject"><br><br>
		 			<textarea name="komentar" cols="40" rows="5"></textarea><br>
 <input type="submit" value="Kirim"> <input type="reset" value="Batal">
 <a href="home.php"></a>
</p>
</form>
</body>
</html>