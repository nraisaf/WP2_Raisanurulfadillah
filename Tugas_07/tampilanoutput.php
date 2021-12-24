<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Output</title>
</head>
	<h2>HASIL HITUNG RUMUS</h2><br>
<body>

<?php
$rumus 	= $_POST ['rumus'];
$nilai1 = $_POST ['nilai1'];
$nilai2 = $_POST ['nilai2'];
$Segitiga = (1/2*($nilai1 * $nilai2));
$Persegipanjang = ($nilai1 * $nilai2);

if ($nilai1 == 0 && $nilai2 == 0){
	echo "Tidak Ada Hasil Perhitungan";
}
elseif ($rumus == 'Segitiga') {
	# segitiga
	echo "<br> Nilai a adalah = ", $nilai1;
	echo "<br> Nilai b adalah = ", $nilai2;
	echo "<br> Rumus yang dipilih adalah = ", $rumus;
	echo "<br> Hasil perhitungan rumus = ", $Segitiga;
}
else {
	# persegipanjang
	echo "<br> Nilai a adalah = ", $nilai1;
	echo "<br> Nilai b adalah = ", $nilai2;
	echo "<br> Rumus yang dipilih adalah = ", $rumus;
	echo "<br> Hasil perhitungan rumus ", $Persegipanjang;
}
?>

</body>
</html>