<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Input</title>
</head>
	<h2>RUMUS-RUMUS</h2>
<body>
	<form action="tampilanoutput.php" method="POST">
		<table border="1">
			<tr>
				<td style="width: 30%">Nilai 1</td>
				<td style="width: 100%"><input type="text" name="nilai1"></td>
			</tr>
			<tr>
				<td style="width: 30%">Nilai 2</td>
				<td style="width: 100%"><input type="text" name="nilai2"></td>
			</tr>
				<td colspan="70" style="text-align: center;">
					<input type="radio" name="rumus" value="Segitiga">segitiga<br>
					<input type="radio" name="rumus" value="Persegi Panjang">persegi panjang<br>
				</td>
			</table>
				<input type="submit" value="Hitung"><a href="tampilanoutput.php"></a>
				<input type="reset" value="Batal">
</body>
</html>