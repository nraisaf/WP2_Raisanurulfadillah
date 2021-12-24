<!DOCTYPE html>
<html>
<head>
  <title>TAMPILAN KOMENTAR</title>
</head>
<body>
  <h1>Berikut Data Komentar Berhasil di Input</h1>
<?php
  $nama=$_POST['nama'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $komentar=$_POST['komentar'];
?>
  Nama Anda : <?php echo $nama; ?> <br> 
  Jenis Kelamin : <?php echo $jenis_kelamin; ?> <br>
  Email Anda  : <?php echo $email; ?> <br>
  Subject : <?php echo $subject; ?> <br>
  Komentar Anda : <?php echo $komentar; ?> <br>
<a href="Halamankomentar.php">Input Data Lagi!</a>
</body>
</html>