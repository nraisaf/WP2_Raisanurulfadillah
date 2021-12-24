<!DOCTYPE html>
<html>
<head>
 <title>Data Komentar</title>
</head>
 <body>
  <?php
  $nama=$_POST['Nama'];
  $email=$_POST['Email'];
  $komentar=$_POST['Komentar'];
  ?>
   <h1>Data Komentar Anda</h1>
   <hr>
   Nama Anda      : <?php echo $nama; ?> <br>
   Email Anda     : <?php echo $email; ?> <br>
   Komentar Anda  : <?php echo $komentar; ?> <br>
   <a href="forminputkomentar.php">INPUT DATA LAGI</a>
 </body>
</html>