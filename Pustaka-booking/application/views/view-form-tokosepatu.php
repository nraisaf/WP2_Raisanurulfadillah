<html>
<head>
    <title>TOKO SEPATU</title>
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
        .form-group{
            line-height:1em;
        }
        .error{
            color:red;
            font-style:italic;
        }
        .table{
            color:white;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="h2 text-center">"TOKO SEPATU RAISA"</h2>
    <div class="row">
        <div class="col-sm-7">
        <h3 class="h3">Form Input Pembelian</h3>
            <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
            <div class="form-group">
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda"><br>
                    <div class="error">
                        <?= form_error('nama'); ?>
                    </div>
                    <input class="form-control" type="text" name='no' id='no' placeholder="Masukkan Nomor Hp"><br>
                    <div class="error">
                        <?= form_error('no'); ?>
                    </div>
                    <select class="form-select"name="merk" id="merk">
                        <option value="" selected disabled>--PILIH MERK SEPATU--</option>
                        <option value="Nike">NIKE</option>
                        <option value="Adidas">ADIDAS</option>
                        <option value="Kickers">KICKERS</option>
                        <option value="Eiger">EIGER</option>
                        <option value="Bucherri">BUCHERRI</option>
                    </select><br>
                    <div class="error">
                        <?= form_error('merk'); ?>
                    </div>
                    <?php
                    echo "<select class=form-select name = size id=size>";
                    echo "<option value=0 selected disabled>--PILIH UKURAN SEPATU--</option>";
                    for ($ukuran=32; $ukuran <=44 ; $ukuran++) { 
                    echo "<option value=".$ukuran.">".$ukuran."</option>";
                    }
                    echo "</select>";
                    ?><br>
                    <div class="error">
                        <?= form_error('size'); ?>
                    </div>
                    <input class="btn btn-primary" type="submit" name="KONFIRMASI"> <input class="btn btn-danger" type="reset" name="BATAL">
            </div>
            </form>
        </div>
        <div class="col-sm-5">
            <h3 class="h3 text-center">Price List</h3>
                <table class="table table-hover">
                    <tr>
                        <td>Merk</td>
                        <td>Harga</td>
                    </tr>
                    <tr>
                        <td>Nike</td>
                        <td>Rp. 375.000</td>
                    </tr>
                    <tr>
                        <td>Adidas</td>
                        <td>Rp. 300.000</td>
                    </tr>
                    <tr>
                        <td>Kickers</td>
                        <td>Rp. 250.000</td>
                    </tr>
                    <tr>
                        <td>Eiger</td>
                        <td>Rp. 275.000</td>
                    </tr>
                    <tr>
                        <td>Bucherri</td>
                        <td>Rp. 400.000</td>
                    </tr>
                </table>
        </div>
    </div>
</div>
</body>
</html>