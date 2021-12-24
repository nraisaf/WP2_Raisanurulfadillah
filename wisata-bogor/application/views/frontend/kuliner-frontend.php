    <div class="bg">
        <h1>Selamat Datang di Website<br>Pariwisata Kota Bogor</h1>
    </div>
    <div class="container-fluid mt-3">
        <div class="wisata" id="kuliner">
            <h1 class="text-center">Kuliner Kota Bogor</h1>
            <?php
            foreach ($kuliner as $k) { ?>
                <div class="row mt-5">
                    <div class="col-sm-3">
                        <img src="<?php echo base_url() ?>assets/img/upload/<?= $k['gambar']; ?>" alt="..." class="img-thumbnail">
                    </div>
                    <div class="col-sm-9">
                        <h4><?= $k['nama_kuliner']; ?></h4>
                        <p><?= $k['keterangan']; ?></p>
                        <p>Harga : </p>
                        <p>Rp.<?= $k['harga']; ?></p>
                        <a href="" class="btn btn-success">Lihat Selengkapnya</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>