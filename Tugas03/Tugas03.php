<html>
<head>
	<title>menghitung volume dan luas tabung</title>
</head>
<body>
<?php
//konstanta untuk nilai tab
	define("tab","menghitung luas dan volume tabung<br>");
//konstanta
	define("phi", 3.14);
echo tab;
$r = 7;
$tinggi = 28;
echo"<br>diketahui:";
echo"<br>jari-jari tutup/alas tabung= $r<br>";
echo"tinggi tabung = $tinggi<br>";
$volume=phi*$r*$r*$tinggi;
echo"<br>mencari volume<br>";
echo"volume tabung = $volume<br>";
$permukaan=2*phi*$r*($r+$tinggi);
echo"<br>mencari luas permukaan<br>";
echo"keliling alas = $permukaan<br>";
$selimut=2*phi*$r*$tinggi;
echo"<br>mencari luas selimut<br>";
echo"keliling alas = $selimut<br>";
$alas=phi*$r*$r;
echo"<br>mencari luas alas<br>";
echo"luas = $alas";