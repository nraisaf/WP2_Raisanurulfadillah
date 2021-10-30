<!DOCTYPE html>
<html>
<head>
    <title>REKAP TRANSAKSI</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <style>
    body{
            background-color:#70c474;
            color:white;
        }
    .container{
        border: 3px solid black;
        background-color:#9b42f5;
        }
    .table{
        color:white;
    }
    </style>
</head>

<body>
<div class="container">
    <center>
        <table class="table table-hover">
            <tr>
                <th colspan="5">
                    <h3>TOKO SEPATU RAISA</h3>
                </th>
            </tr>
            <tr>
                <td>NAMA PEMBELI</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td>MERK SEPATU</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td>UKURAN SEPATU</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td>:</td>
                <td>Rp. <?= $harga ?></td>
            </tr>
        </table>
        <a class= "btn btn-success" href="<?php echo base_url() . 'tokosepatu' ?>">KEMBALI</a><br><br>
    </center>
    </div>
</body>
</html>