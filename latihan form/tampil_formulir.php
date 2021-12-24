<!DOCTYPE html>
<html>
<head>
	<title>Data komentar</title>
	<h1>Berikut data komentar berhasil di input</h1>
</head>
<body>
<?php
$nama=$_GET['nama'];
$Password=$_GET['Password'];
$Jenis_kelamin=$_GET['Jenis_kelamin'];
$jumlah= count ($_GET['hobi']);
$asal_kota=$_GET['asal_kota'];
$Komentar=$_GET['Komentar'];
echo "Nama saya		: ".$nama; echo "<br>";
echo "Password		: ".$Password; echo "<br>";
echo "Jenis Kelamin	: ".$Jenis_kelamin; echo "<br>";
echo "Hobi			: ";
for ($i=0; $i<$jumlah; $i++)
{echo $_GET['hobi'] ['$i'].", ";}
echo "<br>";
echo "Asal Kota 	: ".$asal_kota; echo "<br>";
echo "Komentar 		: ".$Komentar; echo "<br>";
 ?>
 <a href="formulir.php">Input Data lagi</a>
</body>
</html>