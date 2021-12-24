<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Luas dan Volume Tabung</title>
</head>
<body>
<?php
//Konstanta untuk nilai tab
	define("tab", "Menghitung Luas dan Volume Tabung<br>");
//konstanta
	define("phi", 3.14);
echo tab;
$r = 7;
$tinggi = 28;

echo"<br>Diketahui:";
echo"<br>Jari-jari tutup/Alas Tabung= $r<br>";
echo"Tinggi Tabung = $tinggi<br>";
$volume=phi*$r*$r*$tinggi;
echo"<br>Mencari Volume<br>";
echo"Volume Tabung = $volume<br>";
$permukaan=2*phi*$r*($r+$tinggi);
echo"<br>Mencari Luas Permukaan<br>";
echo"Keliling Alas = $permukaan<br>";
$selimut=2*phi*$r*$tinggi;
echo"<br>Mencari Luas Selimut<br>";
echo"Keliling Alas = $selimut<br>";
$alas=phi*$r*$r;
echo"<br>Mencari Luas Alas<br>";
echo"Luas = $alas";