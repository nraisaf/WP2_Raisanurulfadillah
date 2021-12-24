<!DOCTYPE html>
<html>
<head>
	<title>TAMPILAN KOMENTAR</title>
	<link rel="stylesheet" type="text/css" href="provlam.css">
</head>

<body bgcolor="#A9A9A9">
	<h3>DATA KOMENTAR</h3><hr>
<?php
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$komentar=$_POST['komentar'];
?>
<hr>
<p>
	Nama Anda		: <?php echo $nama; ?> <br> 
	E-mail 			: <?php echo $email; ?> <br>
	Website 		: <?php echo $website; ?> <br>
	Komentar anda	: <?php echo $komentar; ?> <br></p>	
	<p><a href="home.html" class="tbl-biru">BACK</a></p>
<a href="formkomentar.html">
	<img src="https://media.tenor.com/images/b96547f13f3410c2df5f59a7bca9bae4/tenor.gif"></a>

</body>
</html>